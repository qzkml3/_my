<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/site/class/dao/MemberDao.php";
	
	class MemberService
	{
		//join
		static function joinMember($req_params) {
			$result = MemberDao::joinMember($req_params);
			return $result;
		}
		
		//get
		static function getMember($req_params) {
			$result = MemberDao::getMember($req_params);
			return $result;
		}
		
		//login
		static function login($req_params) {
			$_SESSION["email"] = $req_params["email"];
		}
	}

?>