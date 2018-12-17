<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/Setting.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT . "/inc/comm_program.php" ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . Setting::WEB_ROOT . "/class/service/CodeService.php" ?>
<?php
	$req_params = Request::getParameters();
	
	//work_flag
	if ($req_params["work_flag"] == "") {
		Js::alertBack(Text::getText("WORK_FLAG_IS_EMPTY"));
	//write
	} else if ($req_params["work_flag"] == "write") {
		validateCode($req_params);
		
		$result = CodeService::writeCode($req_params);
		
		if ($result) {
			Js::alert(Text::getText("RESULT_WRITE"));
			Js::locationReplace("code_list.html?" . Request::getQueryString());
		} else {
			Js::alertBack(Text::getText("RESULT_ERROR"));
		}
	//edit
	} else if ($req_params["work_flag"] == "edit") {
		validateCode($req_params);
		
		$result = CodeService::editCode($req_params);
		
		if ($result) {
			Js::alert(Text::getText("RESULT_EDIT"));
			Js::locationReplace("code_list.html?" . Request::getQueryString());
		} else {
			Js::alertBack(Text::getText("RESULT_ERROR"));
		}
	//delete
	} else if ($req_params["work_flag"] == "delete") {
		$result = CodeService::deleteCodes($req_params);
		
		if ($result) {
			Js::alert(Text::getText("RESULT_DELETE"));
			Js::locationReplace("code_list.html");
		} else {
			Js::alertBack(Text::getText("RESULT_ERROR"));
		}
	} else {
		Js::alertBack(Text::getText("CONFIRM_WORK_FLAG"));
	}
	
	function validateCode($req_params) {
		//validate
		Field::isEmpty("코드이름", "f", "code_name", $req_params);
	}
?>