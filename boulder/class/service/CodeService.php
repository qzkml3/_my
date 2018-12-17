<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT . "/class/dao/CodeDao.php";
	
	class CodeService
	{
	
		//getList
		static function getListCode($req_params) {
			return CodeDao::getListCode($req_params);
		}
		
		//get
		static function getCode($req_params) {
			return CodeDao::getCode($req_params);
		}
		
		//write
		static function writeCode($req_params) {
			if (empty($req_params["ref_code"])) {
				$req_params["code"] = CodeDao::getNextCodeAtRoot($req_params);
			} else {
				$req_params["code"] = CodeDao::getNextCodeAtSub($req_params);
			}
			return CodeDao::writeCode($req_params);
		}
		
		//edit
		static function editCode($req_params) {
			return CodeDao::editCode($req_params);
		}
		
		//delete
		static function deleteCodes($req_params) {
			return CodeDao::deleteCodes($req_params);
		}
	}

?>