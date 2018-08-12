<?php
	require_once $_SERVER["DOCUMENT_ROOT"] . "/ko/class/common/FrameWork.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/ko/class/common/HTTP.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/ko/class/common/JS.php";

	session_start();
	HTTP::setHeader();
	FrameWork::getController();

	//site_config
	define("SITE_TITLE", "_proto");
?>
<!doctype html>
<html lang="ko">
<head>
    <title><?= DOC_TITLE ?> : <?= SITE_TITLE ?></title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<?php if (LAYOUT == "") { ?>
       <header>
           layout_top : <?= SITE_TITLE ?>
       </header>
	<?php } ?>