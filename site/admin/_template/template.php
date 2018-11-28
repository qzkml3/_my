<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/site/inc/comm_prog_code.php"; ?>
<?php
	define("LAYOUT", "sub");
	define("DOC_TITLE", "템플릿");
	
	$req_params = Request::getParameters();
?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/site/admin/inc/layout_top.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/site/inc/comm_js.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/site/admin/inc/layout_btm.php"; ?>