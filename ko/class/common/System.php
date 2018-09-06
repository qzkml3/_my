<?php

	class System
	{
		static function getController() {
			//controler
			// $controller = __FILE__; todo test;
			$controller = $_SERVER["SCRIPT_FILENAME"];
			$controller = str_replace(".html", "_ctrl.php", $controller);
			if (file_exists($controller)) {
				require_once $controller;
			}
		}

		static function getDebugMode() {
			if ($_SERVER["REMOTE_ADDR"] == "127.0.0.1") {
				return true;
			} else {
				return false;
			}
		}

		static function setDebugModeToJS() {
			echo '
				<script>
					SYSTEM_DEBUG_MODE = ' . System::getDebugMode() . '
				</script>
			';
		}

		static function getDocTitle() {
			if (DOC_TITLE) {
				echo DOC_TITLE . " : " . SITE_TITLE;
			} else {
				echo SITE_TITLE;
			}
		}
		
		static function getHeaderRemove() {
			if (StringUtil::startsWith(phpversion(), "5.2.12")) { //office apm
				return false;
			} else {
				return true;
			}
		}
	}
?>