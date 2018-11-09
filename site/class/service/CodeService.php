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
			
			return DB::execute($query);
		}
		
		static function getCode($req_params) {
			$code_id = $req_params["code_id"];
			
			$query = DBQuery::select("code");
			$query = DBQuery::where($query, "code_id = $code_id");
			
			$data = DB::execute($query)->fetch_assoc();
			
			return $data;
		}
		
		static function writeCode($req_params) {
			$query = DBQuery::insert("code");
			$values["code"] = $req_params["code"];
			$values["code_name"] = $req_params["code_name"];
			$values["ref_code"] = $req_params["ref_code"];
			$values["code_level"] = $req_params["code_level"];
			
			$query = DBQuery::values($query, $values);
			
			return DB::execute($query);
		}
		
		static function editCode($req_params) {
			$code_id = $req_params["code_id"];
			
			$query = DBQuery::update("code");
			$values["code_name"] = $req_params["code_name"];
			echo $values["code_name"];
			$query = DBQuery::set($query, $values);
			$query = DBQuery::where($query, "code_id = ". $req_params["code_id"]);
			
			return DB::execute($query);
		}
		
		static function deleteCodes($req_params) {
			$code_id = $req_params["code_id"];
			$code = $req_params["code"];
			
			if (! is_array($code_id)) {
				Js::alertBack(Lang::getText("ITEM_NO_SELECTED"));
			} else {
				$code_ids = join($code_id, ", ");
			}
			
			$query = DBQuery::delete("code");
			 //code delete
			$query = DBQuery::where($query, "code_id in (". $code_ids .")");
			//code decendant delete
			$query = DBQuery::_or($query, "ref_code regexp '" . join($code, "|"). "'");
			$query = DBQuery::_and($query, "code_level > 1");
			
			return DB::execute($query);
		}
	}

?>