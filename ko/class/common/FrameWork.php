<?php

	class FrameWork {
		static public function getController() {
			//controler
			$controller = $_SERVER["DOCUMENT_ROOT"] . $_SERVER["PHP_SELF"];
			$controller = str_replace(".html", "_ctrl.php", $controller);
			if ( file_exists($controller) ) {
				require_once $controller;
			}
		}
	}

?>