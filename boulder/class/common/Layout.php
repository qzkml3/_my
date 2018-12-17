<?php
	class Layout {
		static function getHeader() {
			require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/inc/layout_header.php";
		}
		
		static function getHeaderAdmin() {
			require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT_ADMIN . "/inc/layout_header.php";
		}
		
		static function getCommJs() {
			require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/inc/comm_js.php";
		}
		
		static function getFooter() {
			require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/inc/layout_header.php";
		}
		
		static function getFooterAdmin() {
			require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT_ADMIN . "/inc/layout_header.php";
		}
	}
?>