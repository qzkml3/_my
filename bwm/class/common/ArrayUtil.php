<?php
	
	class ArrayUtil
	{
		static function trimArray($arr) {
			if (is_array($arr)) {
				return array_map('ArrayUtil::trimArray', $arr);
			} else {
				return trim($arr);
			}
		}
		
		static function presentArray($arr, $separate, $last) {
			foreach ($arr as $key => $val) {
				$arr[$key] = $key . $separate . $val . $last;
			}
			return $arr;
		}
		
		static function wrapValueWith($arr, $wrap) {
			foreach ($arr as $key => $val) {
				$arr[$key] = $wrap . $val . $wrap;
			}
			return $arr;
		}
	}

?>