<?php
	define("SITE_TITLE", "ko");
	require_once $_SERVER['DOCUMENT_ROOT'] . "/site/inc/comm_prog_code.php";
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
<?php echo $_SESSION["email"]; ?>
<?php if (LAYOUT == "main" || LAYOUT == "sub") { ?>
	<header id="header">
		<div id="header_inner">
			<h1>
				<a href="/">_my</a>
			</h1>
			<nav id="gnb">
			</nav>
			<nav id="gnb2">
				<a href="/site/admin/">어드민</a>&nbsp;&nbsp;&nbsp;
				<?php if (!MemberService::isLogin()) { ?>
					<a href="/site/sub/member/login.html">로그인</a>
					<a href="/site/sub/member/join.html">회원가입</a>
				<?php } else { ?>
				<a href="/site/sub/member/logout.php">로그아웃</a>
				<?php } ?>
			</nav>
		</div>
	</header>
	<main id="main">
	<div id="main_inner">
	<h1><?= DOC_TITLE ?></h1>
<?php } ?>