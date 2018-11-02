<?php
	Class Request {
		static function getParam($name) {
			$param = $_REQUEST[$name];
			return $param;
		}
		
		static function getRequestParameters() {
			return $_GET + $_POST;
		}
	}
?>