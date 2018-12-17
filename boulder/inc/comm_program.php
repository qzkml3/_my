<?
	
	
	header("Content-Type: text/html; charset=UTF-8");
	
	//include
	Code::getOnce("/class/common/Code.php");
	require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/class/common/Code.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/class/common/Layout.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/class/common/Request.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/class/common/DB.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/class/common/DBQuery.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/class/common/Js.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/class/common/Field.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/class/common/StringUtil.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/class/common/ArrayUtil.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/class/common/Framework.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/class/common/Text.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/class/common/DevUtil.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/class/service/MemberService.php";
	require_once $_SERVER["DOCUMENT_ROOT"] . Setting::WEB_ROOT . "/class/service/MenuService.php";
	
	Framework::setSession();
	
	$req_params = Request::getParameters();
	
	class Code
	{
		static function getOnce($path) {
			require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT . $path;
		}
	}

?>