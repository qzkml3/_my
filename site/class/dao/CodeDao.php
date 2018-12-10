<?php
	
	class CodeDao
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
			$values["code"] = $req_params["code"];
			$values["code_name"] = $req_params["code_name"];
			$values["ref_code"] = $req_params["ref_code"];
			$values["code_level"] = empty($req_params["code_level"]) ? 1 : $req_params["code_level"];
			$query = DBQuery::insert("code");
			$query = DBQuery::values($query, $values);
			return DB::execute($query);
		}
		
		//edit
		static function editCode($req_params) {
			$code_id = $req_params["code_id"];
			
			$query = DBQuery::update("code");
			$values["code_name"] = $req_params["code_name"];
			$query = DBQuery::set($query, $values);
			$query = DBQuery::where($query, "code_id = " . $code_id);
			
			return DB::execute($query);
		}
		
		//delete
		static function deleteCodes($req_params) {
			$code_id = $req_params["code_id"];
			$code = $req_params["code"];
			
			if (!is_array($code_id)) {
				Js::alertBack(Text::getText("ITEM_NO_SELECTED"));
			} else {
				$code_ids = join($code_id, ", ");
			}
			
			$query = DBQuery::delete("code");
			//code delete
			$query = DBQuery::where($query, "code_id in (" . $code_ids . ")");
			//code decendant delete
			$query = DBQuery::_or($query, "ref_code regexp '" . join($code, "|") . "'");
			$query = DBQuery::_and($query, "code_level > 1");
			
			return DB::execute($query);
		}
		
		static function getNextCodeAtRoot($req_params) {
			$colums = array("max(code) as max_code");
			$query = DBQuery::select($colums);
			$query = DBQuery::from($query, "code");
			$query = DBQuery::where($query, "ref_code is null or ref_code = ''");
			$code_data = DB::getData($query);
			
			if (empty($code_data["max_code"])) {
				$next_code = 1;
			} else {
				$next_code = $code_data["max_code"] + 1;
			}
			
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