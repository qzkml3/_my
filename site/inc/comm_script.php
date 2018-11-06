<?
	header("Content-Type: text/html; charset=UTF-8");
	
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/Request.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/DB.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/DBQuery.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/Js.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/StringUtil.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/Framework.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/Lang.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/DevUtil.php";

	Framework::setSession();
?>