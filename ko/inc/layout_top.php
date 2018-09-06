<?php
	define("SITE_TITLE", "ko");
	
	require_once $_SERVER["DOCUMENT_ROOT"] . "/ko/class/common/JS.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/ko/class/common/StringUtil.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/ko/class/common/System.php";
	
	session_start();
	if (System::getHeaderRemove()) {
		header_remove("Cache-Control");
		header_remove("Pragma");
		header_remove("Expires");
	}

	System::getController();
?>
	<!doctype html>
	<html lang="ko">
	<head>
		<?php System::setDebugModeToJS(); ?>
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
		<h1><a href="/">_my</a></h1>
		<nav id="gnb">
			<a href="/ko/sub/article/article.html">게시판</a>
		</nav>
	</header>
<?php } ?>