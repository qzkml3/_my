<?php

	Class CodeService
	{
		static function getListCode($req_params) {
			$ref_code = $req_params["ref_code"];
			
			$query = DBQuery::select("code");
			
			if ($ref_code == "") {
				$query = DBQuery::where($query, "ref_code is null or ref_code = ''");
			} else {
				$query = DBQuery::where($query, "ref_code = '$ref_code'");
			}
			
			$query = DBQuery::orderBy($query, "code_name asc");
			
			DevUtil::consoleLog($query);
			return DB::getDB()->query($query);
		}
		
		static function getCode($req_params) {
			$ref_code = $req_params["ref_code"];
			
			$query = DBQuery::select("code");
			
			if ($ref_code == "") {
				$query = DBQuery::where($query, "ref_code is null");
			} else {
				$query = DBQuery::where($query, "ref_code = $ref_code");
			}
			
			$query = DBQuery::orderBy($query, "code_name asc");

			return DB::getDB()->query($query);
		}
		
		static function writeCode($req_params) {
			$query = DBQuery::insert("code");
			$values["code"] = $req_params["code"];
			$values["code_name"] = $req_params["code_name"];
			$values["ref_code"] = $req_params["ref_code"];
			$query = DBQuery::values($query, $values);
			
			DevUtil::consoleLog($query);
			return DB::getDB()->query($query);
		}
		
		static function editCode($req_params) {
			$ref_code = $req_params["ref_code"];
			
			$query = DBQuery::select("code");
			
			if ($ref_code == "") {
				$query = DBQuery::where($query, "ref_code is null or ref_code = ''");
			} else {
				$query = DBQuery::where($query, "ref_code = $ref_code");
			}
			
			$query = DBQuery::orderBy($query, "code_name asc");

			return DB::getDB()->query($query);
		}
		
		static function deleteCodes($req_params) {
			$id = $req_params["id"];
			if (! is_array($id)) {
				Js::alertBack(Lang::getText("ITEM_NO_SELECTED"));
			} else {
				$ids = join($id, ", ");
			}
			
			$query = DBQuery::delete("code");
			$query = DBQuery::where($query, "id in (". $ids .")");
			
			DevUtil::consoleLog($query);
			return DB::getDB()->query($query);
		}
	}

?>