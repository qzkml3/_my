<?php
	
	class MemberService
	{
		//join
		static function joinMember($req_params) {
			if (empty($req_params["ref_code"])) {
				$req_params["code"] = CodeDao::getNextCodeAtRoot($req_params);
			} else {
				$req_params["code"] = CodeDao::getNextCodeAtSub($req_params);
			}
			return CodeDao::writeCode($req_params);
		}
		
	}

?>