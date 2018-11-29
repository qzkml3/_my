<?php
	
	class MemberDao
	{
		static function joinMember($req_params) {
			$query = DBQuery::insert("member");
			$values["nick_name"] = $req_params["nick_name"];
			$values["email"] = $req_params["email"];
			$values["password"] = $req_params["password"];
			$query = DBQuery::values($query, $values);
			return DB::execute($query);
		}
		
		static function getMember($req_params) {
			$columns = array(
				"*"
			);
			$query = DBQuery::select($columns);
			$query = DBQuery::from($query, "member");
			$query = DBQuery::where($query, "email = '" . $req_params["email"] . "'");
			return DB::execute($query);
		}
	}

?>