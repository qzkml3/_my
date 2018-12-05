<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/site/inc/comm_prog_code.php" ?>
<?php// header("Content-Type: text/javascript;charset=UTF-8");?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/site/class/service/MemberService.php" ?>
<?php
	$req_params = Request::getParameters();
	
	//validate
	Field::isEmpty("이메일", "f", "email", $req_params);
	Field::isEmpty("비밀번호", "f", "password", $req_params);
	
	//work_flag
	if ($req_params["work_flag"] == "") {
		Js::alert(Text::getText("WORK_FLAG_IS_EMPTY"));
	//join
	} else if ($req_params["work_flag"] == "login") {
		$result = MemberService::getMember($req_params);
		
		if ($result) {
			MemberService::login($req_params);
			
			Js::alert(Text::getText("LOGIN_OK"));
			Js::locationHref("/site/");
		} else {
			Js::alert(Text::getText("LOGIN_NO"));
		}
	} else {
		Js::alert(Text::getText("INVALID_WORK_FLAG"));
	}
?>