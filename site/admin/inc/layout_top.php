<?php
	define("SITE_TITLE", "ko");
?>
	<!doctype html>
	<html lang="ko">
	<head>
		<?php DevUtil::setDevModeToJS(); ?>
		<title><?php Framework::getDocTitle(); ?></title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=2.0">
		
		<link rel="stylesheet" href="/site/css/util.css">
		<link rel="stylesheet" href="/site/css/common.css">
	</head>
<body>
<?php if (LAYOUT == "default" || LAYOUT == "lnb") { ?>
	<header id="header">
		<div id="header_inner">
			<h1>
				<a href="/">_my</a>
				<a href="/site/admin">admin</a>
			</h1>
			<nav id="gnb">
				<a href="/site/admin/sub/code/code_list.html">코드관리</a>
				<a href="/site/admin/sub/member/join.html">회원가입</a>
			</nav>
		</div>
	</header>
	<main id="container">
	<div id="container_inner">
	<h1><?= DOC_TITLE ?></h1>
<?php } ?>