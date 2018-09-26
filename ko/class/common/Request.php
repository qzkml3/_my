<?php
	Class Request {
		static function getParam($name) {
			$param = $_REQUEST[$name];
			return $param;
		}
	}
?>