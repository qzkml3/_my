<?
	//include
	Code::getOnce("/class/common/Page.php");
	Code::getOnce("/class/common/Code.php");
	Code::getOnce("/class/common/Request.php");
	Code::getOnce("/class/common/DB.php");
	Code::getOnce("/class/common/DBQuery.php");
	Code::getOnce("/class/common/Js.php");
	Code::getOnce("/class/common/Field.php");
	Code::getOnce("/class/common/StringUtil.php");
	Code::getOnce("/class/common/ArrayUtil.php");
	Code::getOnce("/class/common/Framework.php");
	Code::getOnce("/class/common/Text.php");
	Code::getOnce("/class/common/DevUtil.php");
	Code::getOnce("/class/service/MemberService.php");
	Code::getOnce("/class/service/MenuService.php");
	
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
	
	class Code
	{
		static function getOnce($path) {
			require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT . $path;
		}
	}

?>