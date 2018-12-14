<!doctype html>
<html lang="ko" class="layout_<?= Setting::getDocLayout() ?>">
<head>
	<?php DevUtil::setDevModeToJS(); ?>
	<title><?php Setting::getHeadTitle(); ?></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=2.0">
	
	<link rel="stylesheet" href="<?= Setting::WEB_ROOT ?>/css/util.css">
	<link rel="stylesheet" href="<?= Setting::WEB_ROOT ?>/css/common.css">
</head>
<body>
<?php if (Setting::getDocLayout() == "default" || Setting::getDocLayout() == "lnb") { ?>
<header id="header">
	<div id="header_inner">
		<h1>
			<a href="<?= Setting::WEB_ROOT ?>"><?= Setting::SITE_TITLE ?></a>
		</h1>
		
		<nav id="gnb">
			<?
				$gnb_list = MenuService::getListGnb($req_params);
				if (count($gnb_list)) {
					foreach ($gnb_list as $row => $gnb_data) {
						?>
						<a href="<?= Setting::WEB_ROOT ?><?= $gnb_data["menu_url"] ?>"><?= $gnb_data["menu_name"] ?></a>
						<?
					}
				} else {
					?>
					<p><?= Text::getText("NO_DATA"); ?></p>
					<?
				}
			?>
		</nav>
		
		<nav id="gnb2">
			<a href="<?= Setting::WEB_ROOT_ADMIN ?>"><?= Setting::SITE_TITLE_ADMIN ?></a>
			&nbsp;&nbsp;&nbsp;
			<?php if (!MemberService::isLogin()) { ?>
				<a href="<?= Setting::WEB_ROOT ?>/sub/member/login.html">로그인</a>
				<a href="<?= Setting::WEB_ROOT ?>/sub/member/join.html">회원가입</a>
			<?php } else { ?>
				<a href="<?= Setting::WEB_ROOT ?>/sub/member/logout.php">로그아웃</a>
			<?php } ?>
		</nav>
	</div>
</header>
<section id="container">
	<div id="container_inner">
		<?php if (Setting::getDocLayout() == "lnb") { ?>
			<nav id="lnb">
				<a class="btn_block" href="<?= Setting::WEB_ROOT ?>/sub/article/notice.html">공지사항</a>
				<a class="btn_block" href="<?= Setting::WEB_ROOT ?>/sub/article/free_article.html">자유게시판</a>
			</nav>
		<?php } ?>
		<main id="main">
			<h1><?= Setting::$doc_title ?></h1>
			<?php } ?>
				
			