<?php
    define("SITE_TITLE", "ko");

	require_once $_SERVER["DOCUMENT_ROOT"] . "/ko/class/common/FrameWork.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/ko/class/common/JS.php";

	session_start();
	FrameWork::getController();
?>
<!doctype html>
<html lang="ko">
<head>
    <title><?= $a?><?= DOC_TITLE ?> : <?= SITE_TITLE ?></title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script>console.log("loaded: layout_top");</script>
</head>
<body>
<?php if (LAYOUT == "") { ?>
<?php } ?>