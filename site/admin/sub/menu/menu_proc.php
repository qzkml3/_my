<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/Setting.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/site/inc/comm_prog_code.php" ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/site/class/service/MenuService.php" ?>
<?php
	$req_params = Request::getParameters();
	
	//work_flag
	if ($req_params["work_flag"] == "") {
		Js::alertBack(Text::getText("WORK_FLAG_IS_EMPTY"));
	//write
	} else if ($req_params["work_flag"] == "write") {
		validateMenu($req_params);
		
		$result = MenuService::writeMenu($req_params);
		
		if ($result) {
			Js::alertBack(Text::getText("RESULT_WRITE"));
		} else {
			Js::alertBack(Text::getText("RESULT_ERROR"));
		}
	//edit
	} else if ($req_params["work_flag"] == "edit") {
		validateMenu($req_params);
		
		$result = MenuService::editMenu($req_params);
		
		if ($result) {
			Js::alertBack(Text::getText("RESULT_EDIT"));
		} else {
			Js::alertBack(Text::getText("RESULT_ERROR"));
		}
	//delete
	} else if ($req_params["work_flag"] == "delete") {
		$result = MenuService::deleteMenus($req_params);
		
		if ($result) {
			Js::alertBack(Text::getText("RESULT_DELETE"));
		} else {
			Js::alertBack(Text::getText("RESULT_ERROR"));
		}
	} else {
		Js::alertBack(Text::getText("CONFIRM_WORK_FLAG"));
	}
	
	function validateMenu($req_params) {
		//validate
		Field::isEmpty("메뉴이름", "f", "menu_name", $req_params);
	}
?>