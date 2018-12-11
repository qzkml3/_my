<!doctype html>
<html lang="ko">
<head>
	<?php DevUtil::setDevModeToJS(); ?>
	<title><?php Setting::getHeadTitleAdmin(); ?></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=2.0">
	
	<link rel="stylesheet" href="<?= Setting::WEB_ROOT?>/css/util.css">
	<link rel="stylesheet" href="<?= Setting::WEB_ROOT?>/css/common.css">
</head>
<body>
	<?php if (Setting::getDocLayOut() == "default" || Setting::getDocLayOut() == "lnb") { ?>
<header id="header">
	<div id="header_inner">
		<h1>
			<a href="<?= Setting::WEB_ROOT_ADMIN ?>"><?= Setting::SITE_TITLE_ADMIN ?></a>
		</h1>
		<nav id="gnb">
			<a class="btn_inline" href="<?= Setting::WEB_ROOT_ADMIN?>/sub/menu/menu_list.html">메뉴관리</a>
			<a class="btn_inline" href="<?= Setting::WEB_ROOT_ADMIN?>/sub/code/code_list.html">회원관리</a>
			<a class="btn_inline" href="<?= Setting::WEB_ROOT_ADMIN?>/sub/code/code_list.html">권한관리</a>
			<a class="btn_inline" href="<?= Setting::WEB_ROOT_ADMIN?>/sub/code/code_list.html">코드관리</a>
		</nav>
		<nav id="gnb2">
			<a class="btn_inline" href="<?= Setting::WEB_ROOT ?>"><?= Setting::SITE_TITLE ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
			<?php if (!MemberService::isLogin()) { ?>
				<a class="btn_inline" href="<?= Setting::WEB_ROOT_ADMIN?>/sub/member/login.html">로그인</a>
				<a class="btn_inline" href="<?= Setting::WEB_ROOT_ADMIN?>/sub/member/join.html">회원가입</a>
			<?php } else { ?>
				<a class="btn_inline" href="<?= Setting::WEB_ROOT_ADMIN ?>/sub/member/logout.php">로그아웃</a>
			<?php } ?>
		</nav>
	</div>
</header>
<section id="container">
	<div id="container_inner">
		<?php if (Setting::getDocLayOut() == "lnb") { ?>
			<nav id="lnb">
				<a class="btn_block" href="<?= Setting::WEB_ROOT ?>/sub/article/notice.html">프론트</a>
				<a class="btn_block" href="<?= Setting::WEB_ROOT ?>/sub/article/free_article.html">어드민</a>
			</nav>
		<?php } ?>
		<main id="main">
			<h1><?= Setting::$doc_title ?></h1>
<?php } ?>