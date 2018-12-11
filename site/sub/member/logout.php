<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/site/inc/comm_program.php"; ?>
<?php
	session_destroy();
	Js::alert(Text::getText("Logout ok."));
	Js::locationReplace("/site/");
?>