<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/site/inc/comm_prog_code.php" ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/site/class/service/CodeService.php" ?>
<?php
	$req_params = Request::getParameters();
	
	//work_flag
	if ($req_params["work_flag"] == "") {
		Js::alertBack(Lang::getText("WORK_FLAG_IS_EMPTY"));
	//write
	} else if ($req_params["work_flag"] == "write") {
		$result = CodeService::writeCode($req_params);
		if ($result) {
			Js::alert(Lang::getText("RESULT_WRITE"));
			Js::locationReplace("code_list.html");
		} else {
			Js::alertBack(Lang::getText("RESULT_ERROR"));
		}
	//edit
	} else if ($req_params["work_flag"] == "edit") {
		$result = CodeService::editCode($req_params);
		if ($result) {
			Js::alert(Lang::getText("RESULT_EDIT"));
			Js::locationReplace("code_list.html");
		} else {
			Js::alertBack(Lang::getText("RESULT_ERROR"));
		}
	//delete
	} else if ($req_params["work_flag"] == "delete") {
		$result = CodeService::deleteCodes($req_params);
		if ($result) {
			Js::alert(Lang::getText("RESULT_DELETE"));
			Js::locationReplace("code_list.html");
		} else {
			Js::alertBack(Lang::getText("RESULT_ERROR"));
		}
	} else {
		Js::alertBack(Lang::getText("CONFIRM_WORK_FLAG"));
	}
?>