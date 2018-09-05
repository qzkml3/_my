<?php

class StringUtil
{
	static function has_str($scope, $find)
	{
		if (strpos($scope, $find) > -1) {
			return true;
		} else {
			return false;
		}
	}
	
	static function start_with($scope, $find)
	{
		if (strpos($scope, $find) == 0) {
			return true;
		} else {
			return false;
		}
	}
}

?>