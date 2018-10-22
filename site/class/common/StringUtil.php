<?php

class StringUtil
{
	static function hasString($scope, $find)
	{
		if (strpos($scope, $find) > -1) {
			return true;
		} else {
			return false;
		}
	}
	
	static function startsWith($scope, $find)
	{
		if (strpos($scope, $find) == 0) {
			return true;
		} else {
			return false;
		}
	}
}

?>