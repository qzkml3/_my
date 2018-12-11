<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/site/inc/comm_program.php"; ?>
<?php
	define("LAYOUT", "default");
	define("DOC_TITLE", "템플릿");
	
	$req_params = Request::getParameters();
?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT_ADMIN . "/inc/layout_top.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/site/inc/comm_js.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT_ADMIN . "/inc/layout_btm.php"; ?>