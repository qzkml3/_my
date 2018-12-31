<!doctype html>
<html lang="ko" class="layout_<?= Page::getLayout() ?>">
<head>
	<?php DevUtil::setDevModeToJS(); ?>
	<title><?php Page::getTitleAdmin(); ?></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=2.0">
	
	<link rel="stylesheet" href="<?= Setting::WEB_ROOT_CORE?>/css/util.css">
	<link rel="stylesheet" href="<?= Setting::WEB_ROOT_CORE?>/css/common.css">
</head>
<body>
	<?php if (Page::getLayout() == "default" || Page::getLayout() == "lnb") { ?>
<header id="header">
	<div id="header_inner">
		<h1>
			<a href="<?= Setting::WEB_ROOT_ADMIN ?>"><?= Setting::SITE_TITLE_ADMIN ?></a>
		</h1>
		<nav id="gnb">
			<a class="btn_inline" href="<?= Setting::WEB_ROOT_ADMIN?>/menu/menu/menu_list.html">메뉴관리</a>
			<a class="btn_inline" href="<?= Setting::WEB_ROOT_ADMIN?>/menu/code/code_list.html">회원관리</a>
			<a class="btn_inline" href="<?= Setting::WEB_ROOT_ADMIN?>/menu/code/code_list.html">권한관리</a>
			<a class="btn_inline" href="<?= Setting::WEB_ROOT_ADMIN?>/menu/code/code_list.html">코드관리</a>
		</nav>
		<nav id="gnb2">
			<a class="btn_inline" href="<?= Setting::WEB_ROOT ?>"><?= Setting::SITE_TITLE ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
			<?php if (!MemberService::isLogin()) { ?>
				<a class="btn_inline" href="<?= Setting::WEB_ROOT_ADMIN?>/menu/member/login.html">로그인</a>
				<a class="btn_inline" href="<?= Setting::WEB_ROOT_ADMIN?>/menu/member/join.html">회원가입</a>
			<?php } else { ?>
				<a class="btn_inline" href="<?= Setting::WEB_ROOT_ADMIN ?>/menu/member/logout.php">로그아웃</a>
			<?php } ?>
		</nav>
	</div>
</header>
<section id="container">
	<div id="container_inner">
		<?php if (Page::getLayout() == "lnb") { ?>
			<nav id="lnb">
				<a class="btn_block" href="<?= Setting::WEB_ROOT ?>/menu/article/notice.html">프론트</a>
				<a class="btn_block" href="<?= Setting::WEB_ROOT ?>/menu/article/free_article.html">어드민</a>
			</nav>
		<?php } ?>
		<main id="main">
			<h1><?= Page::$title ?></h1>
<?php } ?>