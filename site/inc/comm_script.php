<?
	header("Content-Type: text/html; charset=UTF-8");
	
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/Request.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/DB.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/DBQuery.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/JS.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/StringUtil.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/Framework.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/Text.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/Debug.php";

	Framework::setSession();
?>