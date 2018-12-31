<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT_CORE . "/class/dao/MenuDao.php";
	
	class MenuService
	{
	
		//getList
		static function getListMenu($req_params) {
			return MenuDao::getListMenu($req_params);
		}
	
		//getList
		static function getListGnb($req_params) {
			return MenuDao::getListMenu($req_params);
		}
		
		//get
		static function getMenu($req_params) {
			return MenuDao::getMenu($req_params);
		}
		
		//get
		static function getRefMenu($req_params) {
			$req_params["menu_code"] = $req_params["ref_menu_code"];
			return MenuDao::getMenu($req_params);
		}
		
		//write
		static function writeMenu($req_params) {
			if (empty($req_params["ref_menu_code"])) {
				$req_params["menu_code"] = MenuDao::getNextMenuAtRoot($req_params);
			} else {
				$req_params["menu_code"] = MenuDao::getNextMenuAtSub($req_params);
			}
			return MenuDao::writeMenu($req_params);
		}
		
		//edit
		static function editMenu($req_params) {
			return MenuDao::editMenu($req_params);
		}
		
		//delete
		static function deleteMenus($req_params) {
			return MenuDao::deleteMenus($req_params);
		}
	}

?>