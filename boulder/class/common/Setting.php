<?php
	
	class Setting
	{
		//Document
		static $doc_title = "";
		static $doc_layout = "";
		
		//Site
		const SITE_TITLE = "_my";
		const SITE_TITLE_ADMIN = "admin";
		
		//DB
		const DB_ID = "root";
		const DB_PASSWORD = "root";
		const DB_HOST = "localhost";
		const DB_NAME = "_my";
		
		//Path
		const WEB_ROOT = "/boulder";
		const WEB_ROOT_ADMIN = "/boulder/admin";
		
		static function getDocLayout() {
			return Setting::$doc_layout;
		}
		
		static function getHeadTitle() {
			if (Setting::$doc_title) {
				echo Setting::$doc_title . " : " . Setting::SITE_TITLE;
			} else {
				echo Setting::SITE_TITLE;;
			}
		}
		
		static function getHeadTitleAdmin() {
			if (Setting::$doc_title) {
				echo Setting::$doc_title . " : " . Setting::SITE_TITLE_ADMIN;
			} else {
				echo Setting::SITE_TITLE;;
			}
		}
	}

?>