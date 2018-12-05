<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/site/inc/comm_prog_code.php"; ?>
<?php
	session_destroy();
	Js::alert(Text::getText("Logout ok."));
	Js::locationReplace("/site/");
?>