<?php require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT . "/inc/comm-program.php"; ?>
<?php
	session_destroy();
	Js::alert(Text::getText("Logout ok."));
	Js::locationReplace("/site/");
?>