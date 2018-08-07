<?php
	//site_config
	define("SITE_TITLE", "_proto");

	//header
	session_start();
	header('Content-Type: text/html');

	//common_lib
	include_once $_SERVER["DOCUMENT_ROOT"] . "/_proto/class/JS.php";

	//controler
	$controller = $_SERVER["DOCUMENT_ROOT"] . $_SERVER["PHP_SELF"];
	$controller = str_replace(".html", "_ctrl.php", $controller);
	if ( file_exists($controller) ) {
		require_once $controller;
	}
?>
<!doctype html>
<html lang="ko">
<head>
	<title><?=DOC_TITLE?> : <?=SITE_TITLE?></title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<header>
		layout_top : <?=SITE_TITLE?>
	</header>
