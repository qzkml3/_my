<?php

	Class CodeService
	{
		static function getListCode($db_param) {
			$code_ref = $db_param["code_ref"];
			
			$query = DBQuery::select("code");
			
			if ($code_ref == "") {
				$query = DBQuery::where($query, "code_ref is null or code_ref = ''");
			} else {
				$query = DBQuery::where($query, "code_ref = '$code_ref'");
			}
			
			$query = DBQuery::orderBy($query, "code_name asc");
			
			DevUtil::consoleLog($query);
			
			return DB::getDB()->query($query);
		}
		
		static function getCode($db_param) {
			$code_ref = $db_param["code_ref"];
			
			$query = DBQuery::select("code");
			
			if ($code_ref == "") {
				$query = DBQuery::where($query, "code_ref is null");
			} else {
				$query = DBQuery::where($query, "code_ref = $code_ref");
			}
			
			$query = DBQuery::orderBy($query, "code_name asc");

			return DB::getDB()->query($query);
		}
		
		static function writeCode($db_param) {
			$query = DBQuery::insert("code");
			$values["code"] = $db_param["code"];
			$values["code_name"] = $db_param["code_name"];
			$values["code_ref"] = $db_param["code_ref"];
			$query = DBQuery::values($query, $values);
			
			DevUtil::consoleLog($query);
			
			return DB::getDB()->query($query);
		}
		
		static function editCode($db_param) {
			$code_ref = $db_param["code_ref"];
			
			$query = DBQuery::select("code");
			
			if ($code_ref == "") {
				$query = DBQuery::where($query, "code_ref is null or code_ref = ''");
			} else {
				$query = DBQuery::where($query, "code_ref = $code_ref");
			}
			
			$query = DBQuery::orderBy($query, "code_name asc");

			return DB::getDB()->query($query);
		}
		
		static function deleteCode($db_param) {
			$code_ref = $db_param["code_ref"];
			
			$query = DBQuery::select("code");
			
			if ($code_ref == "") {
				$query = DBQuery::where($query, "code_ref is null");
			} else {
				$query = DBQuery::where($query, "code_ref = $code_ref");
			}
			
			$query = DBQuery::orderBy($query, "code_name asc");

			return DB::getDB()->query($query);
		}
	}

?>