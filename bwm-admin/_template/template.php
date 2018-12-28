<?php require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT . "/inc/comm-program.php"; ?>
<?php
	define("LAYOUT", "default");
	define("DOC_TITLE", "템플릿");
	
	$req_params = Request::getParameters();
?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT_ADMIN . "/inc/layout_header.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/bwm/inc/comm_js.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT_ADMIN . "/inc/layout_footer.php"; ?>