<?php

	class Framework
	{
		static function getController() {
			$controller = $_SERVER["SCRIPT_FILENAME"];
			$controller = str_replace(".html", "_ctrl.php", $controller);
			if (file_exists($controller)) {
				require_once $controller;
			}
		}

		static function getDocTitle() {
			if (DOC_TITLE) {
				echo DOC_TITLE . " : " . SITE_TITLE;
			} else {
				echo SITE_TITLE;
			}
		}
		
		static function hasHeaderRemove() {
			if (StringUtil::startsWith(phpversion(), "5.2.12")) { //office apm
				return false;
			} else {
				return true;
			}
		}
		
		static function setSession() {
			session_start();
			if (Framework::hasHeaderRemove()) {
				header_remove("Cache-Control");
				header_remove("Pragma");
				header_remove("Expires");
			}
		}
	}
?>