<!doctype html>
<html lang="ko">
<head>
	<?php DevUtil::setDevModeToJS(); ?>
	<title><?php Framework::getDocTitle(); ?></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=2.0">
	
	<link rel="stylesheet" href="<?= Setting::WEB_ROOT . "/css/util.css" ?>">
	<link rel="stylesheet" href="<?= Setting::WEB_ROOT . "/css/common.css" ?>">
</head>
<body>
<?php if (LAYOUT == "default" || LAYOUT == "lnb") { ?>
<header id="header">
	<div id="header_inner">
		<h1>
			<a href="/">_my</a>
			<a href="<?= Setting::WEB_ROOT_ADMIN ?>">admin</a>
		</h1>
		<nav id="gnb">
			<a href="<?= Setting::WEB_ROOT_ADMIN . "/sub/code/code_list.html" ?>">메뉴관리</a>
			<a href="<?= Setting::WEB_ROOT_ADMIN . "/sub/code/code_list.html" ?>">코드관리</a>
		</nav>
		<nav id="gnb2">
			<a href="<?= Setting::WEB_ROOT_ADMIN . "/" ?>">어드민</a>&nbsp;&nbsp;&nbsp;
			<?php if (!MemberService::isLogin()) { ?>
				<a href="<?= Setting::WEB_ROOT_ADMIN . "/sub/member/login.html" ?>">로그인</a>
				<a href="<?= Setting::WEB_ROOT_ADMIN . "/sub/member/join.html" ?>">회원가입</a>
			<?php } else { ?>
				<a href="<?= Setting::WEB_ROOT_ADMIN . "/sub/member/logout.php" ?>">로그아웃</a>
			<?php } ?>
		</nav>
	</div>
</header>
<div id="container">
	<div id="container_inner">
		<h1><?= DOC_TITLE ?></h1>
<?php } ?>