<?
	
	class Setting
	{
		//Document
		static $doc_title = "";
		static $doc_layout = "";
		
		//Site
		const SITE_TITLE = "_my";
		const SITE_TITLE_ADMIN = "admin";
		
		//DB
		const DB_ID = "root";
		const DB_PASSWORD = "root";
		const DB_HOST = "localhost";
		const DB_NAME = "_my";
		
		//Path
		const WEB_ROOT = "/site";
		const WEB_ROOT_ADMIN = "/site/admin";
		
		static function getDocLayout() {
			return Setting::$doc_layout;
		}
		
		static function getHeadTitle() {
			if (Setting::$doc_title) {
				echo Setting::$doc_title . " : " . Setting::SITE_TITLE;
			} else {
				echo Setting::SITE_TITLE;;
			}
		}
		
		static function getHeadTitleAdmin() {
			if (Setting::$doc_title) {
				echo Setting::$doc_title . " : " . Setting::SITE_TITLE_ADMIN;
			} else {
				echo Setting::SITE_TITLE;;
			}
		}
	}
	
	//include
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
	
	header("Content-Type: text/html; charset=UTF-8");
	
	Framework::setSession();
	
	$req_params = Request::getParameters();
?>