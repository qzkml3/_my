<?php
	
	class Document
	{
		static $title = "";
		static $layout = "";
		
		public static function getTitleAdmin() {
			if (Document::$title) {
				echo Document::$title . " : " . Setting::SITE_TITLE_ADMIN;
			} else {
				echo Setting::SITE_TITLE;;
			}
		}
		
		public static function getLayout() {
			return Document::$layout;
		}
		
		public static function getTitle() {
			if (Document::$title) {
				echo Document::$title . " : " . Setting::SITE_TITLE;
			} else {
				echo Setting::SITE_TITLE;;
			}
		}
	}

?>