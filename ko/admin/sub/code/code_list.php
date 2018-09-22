<?php
	include_once $_SERVER['DOCUMENT_ROOT'] . "/ko/class/service/CodeService.php";

	/*get Data*/
	$dataList = CodeService::getList();

	/*Data to Array*/
	while ($data = $dataList->fetch_assoc()) {
		$dataListCode[] = $data;
	}

	/*Data presentation*/
	/*for ($i = 0; $i < count($dataListCode); $i++) {
		$code_name = $dataListCode[$i]["code_name"];
		$dataListCode[$i]["code_name"] = $code_name . "abc";
	}*/
?>