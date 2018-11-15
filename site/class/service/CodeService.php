<?php

	Class CodeService
	{
		//getList
		static function getListCode($req_params) {
			$ref_code = $req_params["ref_code"];
			
			$columns = array(
				"*"
			);
			$query = DBQuery::select($columns);
			$query = DBQuery::from($query, "code");
			
			if ($ref_code == "") {
				$query = DBQuery::where($query, "ref_code is null");
				$query = DBQuery::_or($query, "ref_code = ''");
			} else {
				$query = DBQuery::where($query, "ref_code = '$ref_code'");
			}
			
			$query = DBQuery::orderBy($query, "code_name asc");
			
			return DB::getList($query);
		}
		
		//get
		static function getCode($req_params) {
			$code_id = $req_params["code_id"];
			
			$columns = array(
				"*"
			);
			$query = DBQuery::select($columns);
			$query = DBQuery::from($query, "code");
			$query = DBQuery::where($query, "code_id = $code_id");
			
			$data = DB::getData($query);
			
			return $data;
		}
		
		//write
		static function writeCode($req_params) {
			$code_level = $req_params["code_level"];
			
			$columns = array(
				'max(code) as max_code'
			);
			$query = DBQuery::select($columns);
			$query = DBQuery::from($query, "code");
			$query = DBQuery::where($query, "code_level  = '$code_level'");
			$code_data = DB::getData($query);
			$max_code = $code_data["max_code"];
			
			$max_code += 1;
			
			$query = DBQuery::insert("code");
			$values["code"] = $max_code;
			$values["code_name"] = $req_params["code_name"];
			$values["ref_code"] = $req_params["ref_code"];
			$values["code_level"] = $req_params["code_level"];
			$query = DBQuery::values($query, $values);
			
			return DB::execute($query);
		}
		
		//edit
		static function editCode($req_params) {
			$code_id = $req_params["code_id"];
			
			$query = DBQuery::update("code");
			$values["code_name"] = $req_params["code_name"];
			$query = DBQuery::set($query, $values);
			$query = DBQuery::where($query, "code_id = ". $code_id);
			
			return DB::execute($query);
		}
		
		//delete
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