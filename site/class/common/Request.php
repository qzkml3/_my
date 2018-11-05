<?php
	Class Request {
		static function getParam($name) {
			//todo trim();
			$param = $_GET + $_POST[$name];
			return $param;
		}
		
		/**
		 * @return array
		 */
		static function getParameters() {
			//todo trim();
			return $_GET + $_POST;
		}
		static function getQueryString() {
			//todo trim();
			return $_GET + $_POST;
		}
	}
?>