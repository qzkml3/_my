<?php

	Class CodeService
	{
		static function getListCode($db_param) {
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
		
		static function write($db_param) {
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
		
		static function edit($db_param) {
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
		
		static function delete($db_param) {
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