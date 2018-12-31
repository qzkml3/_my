<?
	//include
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/common/Page.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/common/Code.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/common/Request.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/common/DB.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/common/DBQuery.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/common/Js.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/common/Field.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/common/StringUtil.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/common/ArrayUtil.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/common/Framework.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/common/Text.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/common/DevUtil.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/service/MemberService.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/service/MenuService.php";
	
	header("Content-Type: text/html; charset=UTF-8");
	Framework::setSession();
	$req_params = Request::getParameters();
	
	class Setting
	{
		//Site
		const SITE_TITLE = "_my";
		const SITE_TITLE_ADMIN = "admin";
		
		//Site Path
		const WEB_ROOT = "/bwm";
		const WEB_ROOT_ADMIN = "/bwm-admin";
		const WEB_ROOT_CORE = "/bwm-core";
		
		//DB
		const DB_ID = "root";
		const DB_PASSWORD = "root";
		const DB_HOST = "localhost";
		const DB_NAME = "_my";
	}

?>