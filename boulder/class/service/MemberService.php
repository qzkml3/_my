<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT . "/class/dao/MemberDao.php";
	
	class MemberService
	{
		static function joinMember($req_params) {
			$result = MemberDao::joinMember($req_params);
			return $result;
		}
		
		static function getMember($req_params) {
			$result = MemberDao::getMember($req_params);
			return $result;
		}
		
		static function login($req_params) {
			$_SESSION["email"] = $req_params["email"];
		}
		
		static function isLogin() {
			if ($_SESSION["email"] != "") {
				return true;
			}
		}
	}

?>