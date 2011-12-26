<?php
/*
 Plugin Name: Simple Facebook Comments For WordPress
 Plugin URI: http://www.davidswordpressplugins.com/simple-facebook-comments-for-wordpress/
 Description: Allows visitors to comment on posts using Facebook connect.  Very simple to use!
 Author: David Nelson
 Version: 1.5
 Author URI: http://www.davidswordpressplugins.com/
 License: GPL2
 */

require_once('Model/UrlHelper.php');
require_once('Model/SimpleFacebookCommentsOptionsModel.php');
require_once('Model/PdoSingleton.php');
require_once('View/OptionsView.php');
require_once('View/CommentsView.php');

if($_POST['action'] == OptionsView::$optionsPageName)
{
	include_once(UrlHelper::getWordpressRootDirectory(dirname( __FILE__ )) . 'wp-load.php');
	include_once(UrlHelper::getWordpressRootDirectory(dirname( __FILE__ )) . 
		'wp-admin/includes/admin.php');
}

PdoSingleton::initialize(DB_NAME, DB_HOST, DB_USER, DB_PASSWORD);

if(is_admin())
{
	SimpleFacebookCommentsOptionsModel::getInstance()->load(true);
	register_activation_hook(__FILE__, array(
		SimpleFacebookCommentsOptionsModel::getInstance(), 'enablePlugin'));
	register_deactivation_hook(__FILE__, array(
		SimpleFacebookCommentsOptionsModel::getInstance(), 'disablePlugin'));
	add_filter('plugin_action_links', array(
		OptionsView::getInstance(), 'addSettingsLink'), 0, 2);
	add_action('admin_menu', 'addSimpleFaceBookCommentsForWordpressOptionsPage');
}
else if($_POST['action'] == OptionsView::$optionsPageName)
{
	if(current_user_can('manage_options'))
	{				
		foreach(SimpleFacebookCommentsOptionsModel::getInstance()->getArrayOfOptionItemModel() as 
			$optionItemModel)
		{
			SimpleFacebookCommentsOptionsModel::getInstance()->
				updateExistingOptionItemModelValueByName($optionItemModel->getOptionId(), 
				$_REQUEST[$optionItemModel->getOptionId()]);
		}
		
		SimpleFacebookCommentsOptionsModel::getInstance()->save();
		print '{"succeeded":true}';
	}
	else
	{
		print '{"succeeded":false}';
	}
}
else
{
	add_action('wp_head', 'loadComments');
}

function loadComments()
{
	global $post;
	if(is_singular())
	{
		SimpleFacebookCommentsOptionsModel::getInstance()->load();
		$disableComments = SimpleFacebookCommentsOptionsModel::getInstance()->
			getOptionItemModelByOptionName(
			SimpleFacebookCommentsOptionsModel::$disableCommentsOnPages_Fieldname)->getOptionValue();
		if(!is_page($post->ID) || (is_page($post->ID) && ($disableComments == "false" || 
			$disableComments == '')))
		{
			add_filter('the_content', array(
				CommentsView::getInstance(), 'add_facebook_comments_to_end_of_the_content'));
			add_filter('language_attributes', array(
				CommentsView::getInstance(), 'getFacebookHtmlAttributes'));
			$_REQUEST['simpleFacebookCommentsForWordpressBlogTitleRequestScoped'] = 
				get_bloginfo('name');;
			$_REQUEST['simpleFacebookCommentsForWordpressPostTitleRequestScoped'] = 
				get_the_title($post->ID);
			add_action('wp_head', array(
				CommentsView::getInstance(), 'getFacebookOpenGraphProtocolMetaTags'), 0, 0);
		}
	}
}

function addSimpleFaceBookCommentsForWordpressOptionsPage()
{
	add_options_page(__('Simple Facebook Comments'), __('Simple Facebook Comments'), 'manage_options', 
		OptionsView::$optionsPageName, array(
		OptionsView::getInstance(), 'getSettingsForm'));	
}

function registerSettings()
{
	register_setting(OptionsView::$optionsPageName, OptionsView::$optionsPageName);
}

?>
