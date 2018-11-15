<?php
	
	class StringUtil
	{
		static function hasString($scope, $find) {
			if (strpos($scope, $find) > -1) {
				return true;
			} else {
				return false;
			}
		}
		
		static function startsWith($scope, $find) {
			if (strpos($scope, $find) == 0) {
				return true;
			} else {
				return false;
			}
		}
		
		static function trimArray($obj) {
			if (is_array($obj)) {
				return array_map('StringUtil::trimArray', $obj);
			} else {
				return trim($obj);
			}
		}
		
		static function presentArray($arr, $separate, $last) {
			foreach ($arr as $key => $val) {
				$arr[$key] = $key . $separate . $val . $last;
			}
			return $arr;
		}
	}

?>