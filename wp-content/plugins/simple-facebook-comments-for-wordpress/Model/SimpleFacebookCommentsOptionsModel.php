<?php 

require_once('OptionsModelBase.php');
require_once('OptionItemModel.php');

class SimpleFacebookCommentsOptionsModel extends OptionsModelBase
{
	public static $adminFacebookId_Fieldname = 'admin_facebook_id';
	public static $facebookApplicationId_Fieldname = 'facebook_application_id';
	public static $xid_Fieldname = 'xid';
	public static $widgetHeight_Fieldname = 'widget_height';
	public static $widgetWidth_Fieldname = 'widget_width';
	public static $numberOfComments_Fieldname = 'number_of_comments_to_show_on_first_load';
	public static $disableCommentsOnPages_Fieldname = 'disable_comments_on_pages';
	private static $instance = null;
	public static function getInstance()
	{
		if(self::$instance == null)
		{
			self::$instance = new SimpleFacebookCommentsOptionsModel();
		}
		return self::$instance;
	}
	protected function __construct()
	{
		parent::__construct('SimpleFacebookCommentsOptionsModel');
		$this->addItemModel(new OptionItemModel(self::$adminFacebookId_Fieldname, 
			'', 'Administrator Facebook Id', 
			'The ' . 
			'<a target="_blank" href="http://apps.facebook.com/whatismyid/">' . 
			'facebook user id</a> of the person who can ' . 
			'<a target="_blank" href="http://developers.facebook.com/tools/comments">moderate comments</a>. ', 
			'text', '', true));
		$this->addItemModel(new OptionItemModel(
			self::$facebookApplicationId_Fieldname, '', 'Facebook App Id', 
			'You must first <a target="_blank" href="http://www.facebook.com/developers/createapp.php">' . 
			'create a facebook app</a> to get a facebook app id.  ' . 
			'You can get the app id for an existing facebook application ' . 
			'<a target="_blank" href="http://www.facebook.com/developers/apps.php">here.</a>  ',	
			'text', '', true));
		$this->addItemModel(new OptionItemModel(self::$widgetHeight_Fieldname, '', 
			'Comments Box Height', 'How many pixels high would you like the facebook comments box to be?', 'text',
			 '200',	true));
		$this->addItemModel(new OptionItemModel(self::$widgetWidth_Fieldname, '', 
		'Comments Box Width',	'How many pixels wide would you like the facebook comments box to be?', 'text', 
			'600', true));
		$this->addItemModel(new OptionItemModel(self::$numberOfComments_Fieldname, 
			'', 'Number Of Comments To Show On First Load', 'How many comments would you like to display on' . 
			' each page when it first loads?', 'text', '2', true));
		$this->addItemModel(new OptionItemModel(self::$disableCommentsOnPages_Fieldname, 
			'', 'Disable Comments On Pages?', 'Would you like to turn off facebook comments' . 
			' on your wordpress pages?', 'checkbox', "false", true));
	}
	protected function preInsert()
	{
		$this->updateExistingOptionItemModelValueByName('xid', $this->generateUniqueId());
	}
	private function generateUniqueId()
	{
		return uniqid($this->getFiveRandomNumbers(), true);
	}
	private function getFiveRandomNumbers()
	{
		$randomNumbers = "";
		for($i = 0; $i < 5; $i++)
		{
			$randomNumbers .= rand(1, 1000000);
		}
		return $randomNumbers;
	}
}

?>
