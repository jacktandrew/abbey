<?php 

class UrlHelper
{
	public static function getCurrentUrl()
	{
		$scheme = "";
		if($_SERVER['HTTPS'] != '' && $_SERVER['HTTPS'] != 'off')
		{
			$scheme = 'https://';
		}
		else 
		{
			$scheme = 'http://';
		}
		return $scheme . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	}
	public static function getWordpressRootDirectory($fullPathToCurrentDirectory)
	{
		$currentDirectoryPieces = explode(DIRECTORY_SEPARATOR, $fullPathToCurrentDirectory);
		$wordPressRootUrl = '';
		foreach($currentDirectoryPieces as $piece)
		{
			if($piece == 'wp-content')
			{
				return $wordPressRootUrl;
			}
			$wordPressRootUrl .= $piece . DIRECTORY_SEPARATOR;
		}
		return '';
	}
}

?>