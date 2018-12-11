<?php
	class Layout {
		static function getHeader() {
			require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT_ADMIN . "/inc/layout_top.php";
		}
	}
?>