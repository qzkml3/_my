<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/site/inc/comm_script.php" ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/site/class/service/CodeService.php" ?>
<?php
	$work_flag = Request::getParam("work_flag");
	
	$db_param["work_flag"] = $work_flag;
	
	if ($work_flag == "") {
		JS::alertBack("작업타입이 없습니다.");
	} else if ($work_flag == "write") {
		CodeService::write($db_param);
	} else if ($work_flag == "edit") {
		CodeService::edit($db_param);
	} else if ($work_flag == "delete") {
		CodeService::delete($db_param);
	}
?>