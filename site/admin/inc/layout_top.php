<?php
	define("SITE_TITLE", "ko");
	include_once $_SERVER['DOCUMENT_ROOT'] . "/site/inc/comm_script.php";
?>
	<!doctype html>
	<html lang="ko">
	<head>
		<?php DevUtil::setDevModeToJS(); ?>
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
				<a href="/site/admin/sub/code/code_list.html">코드관리</a>
			</nav>
		</div>
	</header>
	<main id="main">
		<div id="main_inner">
			<h1><?= DOC_TITLE ?></h1>
<?php } ?>