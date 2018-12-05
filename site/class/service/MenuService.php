<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/site/class/dao/MenuDao.php";
	
	class MenuService
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