<?php

require_once('PdoSingleton.php');

abstract class OptionsModelBase
{
	private $configEntryName;
	private $optionExistsStatement;
	private $loadOptionsModelStatement;
	private $loadPostStatement;
	private $loadBlogNameStatement;
	private $updateStatement;
	private $insertStatement;
	private $arrayOfOptionItemModel = array();
	
	protected function __construct($configEntryName)
	{		
		$this->configEntryName = $configEntryName;
		$this->optionExistsStatement = PdoSingleton::getInstance()->getPdo()->prepare('
			select option_name from wp_options where option_name = ?
		');
		$this->loadOptionsModelStatement = PdoSingleton::getInstance()->getPdo()->prepare('
			select option_value from wp_options where option_name = ?
		');
		$this->updateStatement = PdoSingleton::getInstance()->getPdo()->prepare('
				update wp_options set option_value = ? where option_name = ?
			');
		$this->insertStatement = PdoSingleton::getInstance()->getPdo()->prepare('
				insert into wp_options (option_name, option_value) values (?, ?)
			');
		
	}
	public function save()
	{
		$this->optionExistsStatement->execute(array($this->configEntryName));
		if($this->optionExistsStatement->fetchObject()->option_name == $this->configEntryName)
		{
			$this->updateStatement->execute(array(serialize($this->arrayOfOptionItemModel), 
				$this->configEntryName));
		}
		else 
		{
			$this->preInsert();
			$this->insertStatement->execute(array($this->configEntryName, 
				serialize($this->arrayOfOptionItemModel)));
		}
	}
	public function load($fromAdmin = false)
	{
		$this->loadOptionsModelStatement->execute(array($this->configEntryName));
		$deserializedOptions = unserialize($this->loadOptionsModelStatement->fetchObject()->option_value);
		if(fromAdmin)
		{
			if($deserializedOptions != '')
			{
				$this->restoreUIDataFromTemplate($deserializedOptions);
			}
		}
		else
		{
			$this->arrayOfOptionItemModel = $deserializedOptions;
		}
	}
	public function updateExistingOptionItemModelValueByName($optionId, $value)
	{
		$optionItemModel = $this->getOptionItemModelByOptionName($optionId);
		if($optionItemModel != null)
		{
			$optionItemModel->setOptionValue($value);
			$this->setOptionItemModelByOptionName($optionId, $optionItemModel);
		}
	}
	public function getArrayOfOptionItemModel()
	{
		return $this->arrayOfOptionItemModel;
	}
	public function enablePlugin()
	{
		$this->load();
		$this->updateExistingOptionItemModelValueByName('pluginEnabled', true);
		$this->save();
	}
	public function disablePlugin()
	{
		$this->load();
		$this->updateExistingOptionItemModelValueByName('pluginEnabled', false);
		$this->save();		
	}
	public function getOptionItemModelByOptionName($optionId)
	{
		if($this->arrayOfOptionItemModel != '')
		{
			foreach($this->arrayOfOptionItemModel as $optionItemModel)
			{
				if($optionItemModel->getOptionId() == $optionId)
				{
					return $optionItemModel;
				}
			}
		}
		return null;
	}
	public function getConfigEntryName()
	{
		return $this->configEntryName;
	}
	protected function preInsert()
	{
	}
	protected function addItemModel(OptionItemModel $optionItemModel)
	{
		$this->arrayOfOptionItemModel[] = $optionItemModel;
	}
	private function restoreUIDataFromTemplate($deserializedOptions)
	{
		foreach($deserializedOptions as $deserializedOptionItemModel)
		{
			$this->updateExistingOptionItemModelValueByName($deserializedOptionItemModel->getOptionId(), 
				$deserializedOptionItemModel->getOptionValue());
		}
	}
	private function setOptionItemModelByOptionName($optionId, OptionItemModel $value)
	{
		$index = 0;
		foreach($this->arrayOfOptionItemModel as $optionItemModel)
		{
			if($optionItemModel->getOptionId() == $optionId)
			{
				break;
			}
			$index++;
		}
		$this->arrayOfOptionItemModel[$index] = $value;
	}
}

?>
