<?php
	
	class MemberDao
	{
		static function joinMember($req_params) {
			$values["code"] = $req_params["code"];
			$values["code_name"] = $req_params["code_name"];
			$values["ref_code"] = $req_params["ref_code"];
			$values["code_level"] = empty($req_params["code_level"]) ? 1 : $req_params["code_level"];
			$query = DBQuery::insert("member");
			$query = DBQuery::values($query, $values);
			return DB::execute($query);
		}
		
		static function getNextCodeAtRoot($req_params) {
			$colums = array("max(code) as max_code");
			$query = DBQuery::select($colums);
			$query = DBQuery::from($query, "code");
			$query = DBQuery::where($query, "ref_code is null or ref_code = ''");
			$code_data = DB::getData($query);
			$next_code = $code_data["max_code"] + 1;
			return $next_code;
		}
		
		static function getNextCodeAtSub($req_params) {
			$colums = array("max(code) as max_code");
			$query = DBQuery::select($colums);
			$query = DBQuery::from($query, "code");
			$query = DBQuery::where($query, "ref_code  = '". $req_params["ref_code"] . "'");
			$code_data = DB::getData($query);
			$max_code = $code_data["max_code"];
			$suff_max_code = StringUtil::lastStringWithOut($max_code, "-");
			$next_code = $req_params["ref_code"] . "-" . ($suff_max_code + 1);
			return $next_code;
		}
	}

?>