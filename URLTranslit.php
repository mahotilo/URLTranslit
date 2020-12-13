<?php

defined('is_running') or die('Not an entry point...');


class URLTranslit{
	static function GetHead(){
		if(\gp\tool::LoggedIn()){
			\gp\tool\Plugins::css('URLTranslit.css', false);
			\gp\tool\Plugins::js('URLTranslit.js', false);
		}
	}
}
