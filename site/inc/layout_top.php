<?php
	define("SITE_TITLE", "ko");
	include_once $_SERVER['DOCUMENT_ROOT'] . "/site/inc/comm_script.php";
?>
	<!doctype html>
	<html lang="ko">
	<head>
		<?php Debug::setDebugModeToJS(); ?>
		<title><?php Framework::getDocTitle(); ?></title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="stylesheet" href="/site/css/util.css">
		<link rel="stylesheet" href="/site/css/common.css">
	</head>
<body>
<?php if (LAYOUT == "main" || LAYOUT == "sub") { ?>
	<header id="header">
		<div id="header_inner">
			<h1><a href="/">_my</a></h1>
			<nav id="gnb">
				<a href="/site/sub/article/article.html">게시판</a>
				<a href="/site/sub/article/article.html">게시판</a>
				<a href="/site/sub/article/article.html">게시판</a>
			</nav>
		</div>
	</header>
	<main id="main">
		<div id="main_inner">
			<h1><?= DOC_TITLE ?></h1>
<?php } ?>
<?php if (LAYOUT == "admin_main" || LAYOUT == "admin_sub") { ?>
	<header id="header">
		<div id="header_inner">
			<h1><a href="/">_my</a></h1>
			<nav id="gnb">
				<a href="/site/sub/article/article.html">코드관리</a>
				<a href="/site/sub/article/article.html">코드관리</a>
				<a href="/site/sub/article/article.html">코드관리</a>
			</nav>
		</div>
	</header>
	<main id="main">
		<div id="main_inner">
			<h1><?= DOC_TITLE ?></h1>
<?php } ?>