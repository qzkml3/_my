<?php
	
	class MenuDao
	{
		//getList
		static function getListMenu($req_params) {
			$columns = array(
				"*"
			);
			$query = DBQuery::select($columns);
			$query = DBQuery::from($query, "menu");
			
			if ($req_params["ref_menu_code"] == "") {
				$query = DBQuery::where($query, "ref_menu_code is null");
				$query = DBQuery::_or($query, "ref_menu_code = ''");
			} else {
				$query = DBQuery::where($query, "ref_menu_code = '" . $req_params["ref_menu_code"] . "'");
			}
			
			$query = DBQuery::orderBy($query, "menu_name asc");
			
			return DB::getList($query);
		}
		
		//get
		static function getMenu($req_params) {
			$columns = array(
				"*"
			);
			$query = DBQuery::select($columns);
			$query = DBQuery::from($query, "menu");
			$query = DBQuery::where($query, "menu_code = '" . $req_params["menu_code"] . "'");
			
			$data = DB::getData($query);
			
			return $data;
		}
		
		//write
		static function writeMenu($req_params) {
			$columns["menu_url"] = $req_params["menu_url"];
			$columns["menu_code"] = $req_params["menu_code"];
			$columns["menu_name"] = $req_params["menu_name"];
			$columns["ref_menu_code"] = $req_params["ref_menu_code"];
			$columns["menu_level"] = empty($req_params["menu_level"]) ? 1 : $req_params["menu_level"];
			$query = DBQuery::insert("menu");
			$query = DBQuery::values($query, $columns);
			return DB::execute($query);
		}
		
		//edit
		static function editMenu($req_params) {
			$query = DBQuery::update("menu");
			$columns["menu_name"] = $req_params["menu_name"];
			$columns["menu_url"] = $req_params["menu_url"];
			$query = DBQuery::set($query, $columns);
			$query = DBQuery::where($query, "menu_code = '" . $req_params["menu_code"] . "'");
			
			return DB::execute($query);
		}
		
		//delete
		static function deleteMenus($req_params) {
			if (!is_array($req_params["menu_code"])) {
				Js::alertBack(Text::getText("ITEM_NO_SELECTED"));
			} else {
				$code_ids = ArrayUtil::wrapValueWith($req_params["menu_code"], "'");
				$code_ids = join($code_ids, ", ");
			}
			
			$query = DBQuery::delete("menu");
			//menu delete
			$query = DBQuery::where($query, "menu_code in (" . $code_ids . ")");
			//menu decendant delete
			$query = DBQuery::_or($query, "ref_menu_code regexp '" . join($req_params["menu_code"], "|") . "'");
			$query = DBQuery::_and($query, "menu_level > 1");
			
			return DB::execute($query);
		}
		
		//get next code root
		static function getNextMenuAtRoot($req_params) {
			$colums = array("max(menu_code) as max_menu_code");
			$query = DBQuery::select($colums);
			$query = DBQuery::from($query, "menu");
			$query = DBQuery::where($query, "ref_menu_code is null or ref_menu_code = ''");
			$menu_data = DB::getData($query);
			
			if (empty($menu_data["max_menu_code"])) {
				$next_code = 1;
			} else {
				$next_code = $menu_data["max_menu_code"] + 1;
			}
			
			return $next_code;
		}
		
		//get next code sub
		static function getNextMenuAtSub($req_params) {
			$colums = array("max(menu_code) as max_menu_code");
			$query = DBQuery::select($colums);
			$query = DBQuery::from($query, "menu");
			$query = DBQuery::where($query, "ref_menu_code  = '". $req_params["ref_menu_code"] . "'");
			$menu_data = DB::getData($query);
			
			$max_code = $menu_data["max_menu_code"];
			$suff_max_code = StringUtil::lastStringWithOut($max_code, "-");
			$next_code = $req_params["ref_menu_code"] . "-" . ($suff_max_code + 1);
			return $next_code;
		}
	}

?>