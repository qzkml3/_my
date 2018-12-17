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
		
		/**구분자 뒤에 문자 리턴*/
		static function lastStringWithOut($scope, $find) {
			$scope = (string)$scope;
			$find = (string)$find;
			
			return substr($scope, strpos($scope, $find) + 1);
		}
		
		static function setDefault($str, $default) {
			if (empty($str)) {
				return $default;
			} else {
				return $str;
			}
		}
	}
?>