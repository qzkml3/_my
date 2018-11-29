<?php
	
	class Text
	{
		static function getText($var_name) {
			$ko["LOGIN_OK"] = "로그인 되었습니다.";
			$en["LOGIN_OK"] = "LOGIN_OK";
			
			$ko["LOGIN_NO"] = "로그인에 실패하였습니다 !";
			$en["LOGIN_NO"] = "Login failed !";
			
			$ko["WORK_FLAG_IS_EMPTY"] = "작업타입이 없습니다.";
			$en["WORK_FLAG_IS_EMPTY"] = "작업타입이 없습니다.";
			
			$ko["RESULT_ERROR"] = "작업실패, 관리자에게 문의바랍니다.";
			$en["RESULT_ERROR"] = "RESULT_ERROR";
			
			$ko["JOIN_OK"] = "회원가입이 완료되었습니다.";
			$en["JOIN_OK"] = "Joinning is complated.";
			
			$ko["JOIN_NO"] = "회원가입이 실패되었습니다.";
			$en["JOIN_NO"] = "Joinning is faild.";
			
			$ko["RESULT_WRITE"] = "등록 되었습니다.";
			$en["RESULT_WRITE"] = "RESULT_WRITE";
			
			$ko["RESULT_EDIT"] = "수정 되었습니다.";
			$en["RESULT_EDIT"] = "RESULT_EDIT";
			
			$ko["RESULT_DELETE"] = "삭제 되었습니다.";
			$en["RESULT_DELETE"] = "RESULT_DELETE";
			
			$ko["CONFIRM_EDIT"] = "수정 하시겠습니까?";
			$en["CONFIRM_EDIT"] = "CONFIRM_EDIT";
			
			$ko["CONFIRM_DELETE"] = "삭제 하시겠습니까?";
			$en["CONFIRM_DELETE"] = "CONFIRM_DELETE";
			
			$ko["ITEM_NO_SELECTED"] = "항목이 선택되지 않았습니다.";
			$en["ITEM_NO_SELECTED"] = "ITEM_NO_SELECTED";
			
			$ko["INVALID_WORK_FLAG"] = "작업타입을 확인해 주세요.";
			$en["INVALID_WORK_FLAG"] = "INVALID_WORK_FLAG";
			
			$ko["WRITE"] = "등록";
			$en["WRITE"] = "WRITE";
			
			$ko["EDIT"] = "수정";
			$en["EDIT"] = "EDIT";
			
			$ko["DELETE"] = "삭제";
			$en["DELETE"] = "DELETE";
			
			$ko["LIST"] = "삭제";
			$en["LIST"] = "LIST";
			
			$ko["VIEW"] = "상세";
			$en["VIEW"] = "VIEW";
			
			$ko["NO_DATA"] = "데이터가 존재하지 않습니다.";
			$en["NO_DATA"] = "Data does not exist.";
			
			$result_text = "";
			
			if (self::isKo()) { //en
				$result_text = $ko[$var_name];
			} else if (self::isEn()) {
				$result_text = $en[$var_name];
			} else {
				DevUtil::consoleLog("Not language selected!");
			}
			return $result_text;
		}
		
		static function isKo() {
			return true;
		}
		
		static function isEn() {
			return true;
		}
	}
?>