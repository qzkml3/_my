<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/site/inc/comm_script.php" ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/site/class/service/CodeService.php" ?>
<?php
	//get request
	$work_flag = Request::getParam("work_flag");
	$code = Request::getParam("code");
	$code_name = Request::getParam("code_name");
	$code_ref = Request::getParam("code_ref");
	
	//set db_param
	$db_param["work_flag"] = $work_flag;
	$db_param["code"] = $code;
	$db_param["code_name"] = $code_name;
	$db_param["code_ref"] = $code_ref;
	
	DevUtil::consoleLog($db_param);
	
	//work_flag
	if ($work_flag == "") {
		JS::alertBack("작업타입이 없습니다.");
	} else if ($work_flag == "write") {
		$result = CodeService::writeCode($db_param);
		if ($result) {
			JS::alertReplace("등록 되었습니다.", "code_list.html");
		} else {
			JS::alertReplace("작업실패, 관리자에게 문의바랍니다.", "code_list.html");
		}
	} else if ($work_flag == "edit") {
		CodeService::editCode($db_param);
	} else if ($work_flag == "delete") {
		CodeService::deleteCode($db_param);
	}
?>