<?php
	
	class Page
	{
		static $title = "";
		static $layout = "";
		static $is_admin = false;
		
		public static function getTitleAdmin() {
			if (Page::$title) {
				echo Page::$title . " : " . Setting::SITE_TITLE_ADMIN;
			} else {
				echo Setting::SITE_TITLE;;
			}
		}
		
		public static function getLayout() {
			return Page::$layout;
		}
		
		public static function getTitle() {
			if (Page::$title) {
				echo Page::$title . " : " . Setting::SITE_TITLE;
			} else {
				echo Setting::SITE_TITLE;;
			}
		}
		
		public static function getHeader() {
			if (Page::$is_admin) {
				require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT_ADMIN . "/inc/layout_header.php";
			} else {
				require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/inc/layout_header.php";
			}
		}
		
		public static function getFooter() {
			if (Page::$is_admin) {
				require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT_ADMIN . "/inc/layout_footer.php";
			} else {
				require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/inc/layout_footer.php";
			}
		}
	}

?>