<?php
	
	class Text
	{
		static function getText($default, $var_name) {
			$en["a_a"] = "aabbcc";
			$ch["a_b"] = "aabbcc";
			
			$en["b_a"] = "aabbcc";
			$ch["b_b"] = "aabbcc";
			
			$en["b_a"] = "aabbcc";
			$ch["b_b"] = "aabbcc";
			
			$en["b_a"] = "aabbcc";
			$ch["b_b"] = "aabbcc";
			
			if (true) { //en
				$default = $en[$var_name] 	;
			} else if (true) {
				$default = $ch[$var_name] 	;
			}
			
			return $default;
		}
		
		
	}
?>