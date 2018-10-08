<?php
	define("SITE_TITLE", "ko");
	include_once $_SERVER['DOCUMENT_ROOT'] . "/ko/inc/comm_code.php";
?>
	<!doctype html>
	<html lang="ko">
	<head>
		<?php Debug::setDebugModeToJS(); ?>
		<title><?php Framework::getDocTitle(); ?></title>
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
	<main>
		<h1><?= DOC_TITLE ?></h1>
<?php } ?>
<?php if (LAYOUT == "admin_main" || LAYOUT == "admin_sub") { ?>
	<header id="header">
		<h1><a href="/">_my</a></h1>
		<nav id="gnb">
			<a href="/ko/admin/sub/code/code_list.html">코드관리</a>
		</nav>
	</header>
	<main>
		<h1><?= DOC_TITLE ?></h1>
<?php } ?>