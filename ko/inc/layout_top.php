<?php
	define("SITE_TITLE", "ko");

	session_start();
	header_remove("Cache-Control");
	header_remove("Pragma");
	header_remove("Expires");

	require_once $_SERVER["DOCUMENT_ROOT"] . "/ko/class/common/System.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/ko/class/common/JS.php";

	System::getController();
?>
	<!doctype html>
	<html lang="ko">
	<head>
		<?php System::setDebugMode(); ?>
		<title><?php System::getDocTitle(); ?></title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="stylesheet" href="/ko/css/util.css">
		<link rel="stylesheet" href="/ko/css/common.css">
		<script>console.log("loaded: layout_top");</script>
	</head>
<body>
<?php if (LAYOUT == "main" || LAYOUT == "sub") { ?>
	<header id="header">
		<h1>_my</h1>
		<nav id="gnb">
			<a href="/ko/sub/article/article.html">게시판</a>
		</nav>
	</header>
<?php } ?>