<?
	header("Content-Type: text/html; charset=UTF-8");
	
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/Request.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/DB.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/DBQuery.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/Js.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/Field.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/StringUtil.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/ArrayUtil.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/Framework.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/Text.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/common/DevUtil.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/service/MemberService.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . "/site/class/service/MenuService.php";

	Framework::setSession();
	
	$req_params = Request::getParameters();
?>