<?php

class CommentsView
{
	private static $instance = null;
	public static function getInstance()
	{
		if(self::$instance == null)
		{
			self::$instance = new CommentsView();
		}
		return self::$instance;
	}
	private function __construct()
	{
	}
	public function getFacebookOpenGraphProtocolMetaTags()
	{
		$metaTags = <<<HEREDOC
		
		<meta property="fb:admins" content="%s" />
		<meta property="og:title" content="%s" />
		<meta property="og:site_name" content="%s" />
		<meta property="og:url" content="%s" />
		<meta property="og:type" content="article" />
		<meta property="fb:app_id" content="%s">
		
HEREDOC;

		printf($metaTags, 
			SimpleFacebookCommentsOptionsModel::getInstance()->getOptionItemModelByOptionName(
			SimpleFacebookCommentsOptionsModel::$adminFacebookId_Fieldname)->getOptionValue(), 
			$_REQUEST['simpleFacebookCommentsForWordpressPostTitleRequestScoped'], 
			$_REQUEST['simpleFacebookCommentsForWordpressBlogTitleRequestScoped'], 
			UrlHelper::getCurrentUrl(), 
			SimpleFacebookCommentsOptionsModel::getInstance()->getOptionItemModelByOptionName(
			SimpleFacebookCommentsOptionsModel::$facebookApplicationId_Fieldname)->getOptionValue());
	}
	public function getFacebookHtmlAttributes($attributes)
	{
		return $attributes . ' xmlns:fb="http://www.facebook.com/2008/fbml" ' . 
			'xmlns:og="http://opengraphprotocol.org/schema/"';
	}
	public function add_facebook_comments_to_end_of_the_content($content)
	{
		return $content . $this->getFacebookCommentsJavascript();
	}
	private function getFacebookCommentsJavascript()
	{
		$facebookCommentsHtml = <<<HEREDOC
	    
		<div id="fb-root"></div>
		<script>
			window.fbAsyncInit = function() {
    			FB.init({appId: "%s", xfbml: true});
    			FB.Event.subscribe('comment.create', function(response) {
					
				});
  			};
  			(function() {
    			var e = document.createElement('script'); e.async = true;
    			e.src = document.location.protocol +
      			'//connect.facebook.net/en_US/all.js';
    			document.getElementById('fb-root').appendChild(e);
  			}());
		</script>
	    <fb:comments href="%s" num_posts="%s" width="%s" height="%s"></fb:comments>
	    <br />
HEREDOC;

		return sprintf($facebookCommentsHtml, 
			SimpleFacebookCommentsOptionsModel::getInstance()->getOptionItemModelByOptionName(
			SimpleFacebookCommentsOptionsModel::$facebookApplicationId_Fieldname)->getOptionValue(),	
			utf8_decode(UrlHelper::getCurrentUrl()), 
			SimpleFacebookCommentsOptionsModel::getInstance()->getOptionItemModelByOptionName(
			SimpleFacebookCommentsOptionsModel::$numberOfComments_Fieldname)->getOptionValue(), 
			SimpleFacebookCommentsOptionsModel::getInstance()->getOptionItemModelByOptionName(
			SimpleFacebookCommentsOptionsModel::$widgetWidth_Fieldname)->getOptionValue(), 
			SimpleFacebookCommentsOptionsModel::getInstance()->getOptionItemModelByOptionName(
			SimpleFacebookCommentsOptionsModel::$widgetHeight_Fieldname)->getOptionValue());
	}
}
