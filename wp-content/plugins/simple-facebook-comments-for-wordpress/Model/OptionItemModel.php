<?php 

class OptionItemModel
{
	private $optionId;
	private $optionValue;
	private $optionDisplayName;
	private $optionDescription;
	private $inputElementType;
	private $inputElementDefaultValue;
	private $visibleInUI;
	public function __construct($optionId, $optionValue, $optionDisplayName, $optionDescription, 
		$inputElementType, $inputElementDefaultValue, $visibleInUI)
	{
		$this->optionId = $optionId;
		$this->optionDisplayName = $optionDisplayName;
		$this->optionValue = $optionValue;
		$this->optionDescription = $optionDescription;
		$this->inputElementType = $inputElementType;
		$this->inputElementDefaultValue = $inputElementDefaultValue;
		$this->visibleInUI = $visibleInUI;
	}
	public function getOptionId()
	{
		return $this->optionId;
	}
	public function getOptionDisplayName()
	{
		return $this->optionDisplayName;
	}
	public function getOptionValue()
	{
		return $this->optionValue;
	}
	public function getOptionDescription()
	{
		return $this->optionDescription;
	}
	public function getInputElementType()
	{
		return $this->inputElementType;
	}
	public function getInputElementDefaultValue()
	{
		return $this->inputElementDefaultValue;
	}
	public function getVisibleInUI()
	{
		return $this->visibleInUI;
	}
	public function setOptionId($optionId)
	{
		$this->optionId = $optionId;
	}
	public function setOptionDisplayName($optionDisplayName)
	{
		$this->optionDisplayNameName = $optionDisplayNameName;
	}
	public function setOptionValue($optionValue)
	{
		$this->optionValue = $optionValue;
	}
	public function setOptionDescription($optionDescription)
	{
		$this->optionDescription = $optionDescription;
	}
	public function setInputElementType($inputElementType)
	{
		$this->inputElementType = $inputElementType;
	}
	public function setInputElementDefaultValue($inputElementDefaultValue)
	{
		$this->inputElementDefaultValue = $inputElementDefaultValue;
	}
	public function setVisibleInUI($visibleInUI)
	{
		$this->visibleInUI = $visibleInUI;
	}
}

?>