<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/site/class/dao/MemberDao.php";
	
	class MemberService
	{
		//join
		static function joinMember($req_params) {
			$result = MemberDao::joinMember($req_params);
			return $result;
		}
		
		//join
		static function login($req_params) {
			$result = MemberDao::getMember($req_params);
			return $result;
		}
	}

?>