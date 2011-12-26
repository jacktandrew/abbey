<?php

class OptionsView
{
	public static $optionsPageName = 'simple_facebook_comments_for_wordpress';
	private static $instance = null;
	public function getInstance()
	{
		if(self::$instance == null)
		{
			self::$instance = new OptionsView();
		}
		return self::$instance;
	}
	private function __construct()
	{
	}
	public function addSettingsLink($existingLinksArray, $pluginPath)
	{
		if(strpos($pluginPath, 'SFCController.php') !== false)
		{
			$existingLinksArray[] = sprintf('<a href="%s%s">%s</a>', 
				$this->getWordpressRootUrl() . 
				'wp-admin/options-general.php?page=', self::$optionsPageName, 'Settings');
		}
		return $existingLinksArray;
	}
	public function getSettingsForm()
	{
		$settingsFormHtml = <<<HEREDOC
			
		<script type="text/javascript">

		jQuery(function() 
		{ 
			jQuery('#notificationArea').hide();
			jQuery('.button-primary').click(function() 
			{
				jQuery('#notificationArea').hide();
				jQuery('.button-primary').attr('disabled', 'disabled');
				jQuery.ajax({
					dataType: 'json', 
	   				type: "POST",
	   				url: "%s",
	   				data: "action=%s&%s",
	   				success: function(data, textStatus, jqXHR)
	   				{
	   					if(data.succeeded)
	   					{
	   						jQuery('.button-primary').removeAttr('disabled');
	   						jQuery('#notificationArea').css('background-color', '#FFFF00');
	     					jQuery('#notificationArea').html('Your settings were successfully saved.');
	     					jQuery('#notificationArea').slideDown();
	     				}
	     				else
	     				{
	     					displayError();
	     				}
	   				}, 
	   				error: function(jqXHR, textStatus, errorThrown)
	   				{
	   					displayError();
	   				}
	 			});
			});
			
			function displayError()
			{
				jQuery('.button-primary').removeAttr('disabled');
				jQuery('#notificationArea').css('background-color', '#E77471');
	   			jQuery('#notificationArea').html('An error occured saving your settings');
	   			jQuery('#notificationArea').slideDown();
			}
			
			function getFormFieldValue(formField)
			{
				if (jQuery(formField).is('input:checkbox'))
				{
					return jQuery(formField).is(':checked');
				}
				return jQuery(formField).val();
			}
		});	
		</script>		
		
		<div class="wrap">
		<div id="notificationArea" style="padding: 5px; margin-top: 5px; -moz-border-radius: 20px;
										  -webkit-border-radius: 20px; -khtml-border-radius: 20px;
										  border-radius: 20px; display: inline-block;"></div>
		<h2 style="padding-top: 0px;">%s</h2>
		
		%s
		
		<input type="submit" class="button-primary" value="%s"></input>
		
		<br />
		</div>

HEREDOC;

		printf($settingsFormHtml, $this->getWordpressRootUrl() . 
			'wp-content/plugins/simple-facebook-comments-for-wordpress/SFCController.php', 
			self::$optionsPageName, 
			$this->buildDataQueryParameters(), 
			'Simple Facebook Comments For Wordpress', 
			 $this->getOptionsFormFields(), 
			__('Save Changes'));
	}
	public function getReferrerRelativeUrl()
	{
		return sprintf('%swp-admin/options-general.php?page=%s', 
			$this->getWordpressRootUrl(), self::$optionsPageName);
	}
	private function buildDataQueryParameters()
	{
		$inputData = "";
		$count = count(SimpleFacebookCommentsOptionsModel::getInstance()->getArrayOfOptionItemModel());
		for($i = 0; $i < $count; $i++)
		{
			$arrayOfOptionItemModel = SimpleFacebookCommentsOptionsModel::getInstance()->
					getArrayOfOptionItemModel();
			if($arrayOfOptionItemModel[$i]->getVisibleInUI())
			{
				$inputData .= sprintf('%1$s=" + getFormFieldValue("#%1$s") + "%2$s', 
					$arrayOfOptionItemModel[$i]->getOptionId(), 
					$this->getAmpersandIfNotLastItem($i, $count));
			}
		}
		return $inputData;		
	}
	private function getAmpersandIfNotLastItem($currentIndex, $arrayCount)
	{
		if($currentIndex < $arrayCount - 1)
		{
			return '&';
		}
		return '';
	}
	private function getOptionsFormFields()
	{
		$formFields = "";
		foreach(SimpleFacebookCommentsOptionsModel::getInstance()->getArrayOfOptionItemModel() as 
			$optionItemModel)
		{
			$formFields .= $this->getFormInputHtml($optionItemModel);
		}
		return $formFields;
	}
	private function getWordpressRootUrl()
	{
		$scheme = parse_url(UrlHelper::getCurrentUrl(), PHP_URL_SCHEME) . '://';
		$current_url_without_scheme = str_replace($scheme, '', UrlHelper::getCurrentUrl());
		$pieces = split('/', $current_url_without_scheme);
		$rootPath = "";
		foreach($pieces as $piece)
		{
			if($piece == 'wp-admin')
			{
				return $scheme . $rootPath;
			}
			$rootPath .= $piece . '/';
		}
	}
	private function getFormInputHtml(OptionItemModel $optionItemModel)
	{
		if($optionItemModel->getVisibleInUI())
		{
			$individualElementHtml = <<<HEREDOC
			
			<div id="poststuff" class="postbox"> 
				<h3>%s</h3> 
	 
					<div class="inside"> 
						<p>%s</p> 
						<p>%s</p> 
					</div> 
			</div> 
			
HEREDOC;
	
			return sprintf($individualElementHtml, $optionItemModel->getOptionDisplayName(), 
				$optionItemModel->getOptionDescription(), 
				$this->renderHtmlFormInput($optionItemModel));
		}
	}
	private function renderHtmlFormInput(OptionItemModel $optionItemModel)
	{
		return sprintf('<input type="%s" name="%s" id="%s" %s>', 
			$optionItemModel->getInputElementType(), $optionItemModel->getOptionId(), 
			$optionItemModel->getOptionId(), $this->buildFormInputValueHtml($optionItemModel));
	}
	private function buildFormInputValueHtml(OptionItemModel $optionItemModel)
	{
		switch($optionItemModel->getInputElementType())
		{
			case 'text':
			{
				return sprintf(' value="%s"', 
					$this->getOptionValueUseDefaultIfEmpty($optionItemModel));
			}
			case 'checkbox':
			{
				if($optionItemModel->getOptionValue() == "true")
				{
					return ' checked';
				}
				return '';
			}
		}
		throw new Exception('input type not found: ' . $optionItemModel->getInputElementType());
	}
	private function getOptionValueUseDefaultIfEmpty(OptionItemModel $optionItemModel)
	{
		if($optionItemModel->getOptionValue() == '')
		{
			return $optionItemModel->getInputElementDefaultValue();
		}
		return $optionItemModel->getOptionValue();
	}
}

?>
