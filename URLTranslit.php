<?php

defined('is_running') or die('Not an entry point...');


class URLTranslit{
	static function GetHead(){
		global $page;
		if(\gp\tool::LoggedIn() && $page->title){
			\gp\tool\Plugins::css('URLTranslit.css', false);
			\gp\tool\Plugins::js('URLTranslit.js', false);
		}
	}
}
?>
