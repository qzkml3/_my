<?php
	
	class Text
	{
		static function getText($var_name) {
			$ko["SAVE_CHANGE_ORDER"] = "순서변경 저장";
			$en["SAVE_CHANGE_ORDER"] = "Save change order";
			
			$ko["CHANGE_ORDER"] = "순서변경";
			$en["CHANGE_ORDER"] = "Change order";
			
			$ko["LIST"] = "목록";
			$en["LIST"] = "list";
			
			$ko["DETAIL_VIEW"] = "상세보기";
			$en["DETAIL_VIEW"] = "Detail view";
			
			$ko["WRITE"] = "등록";
			$en["WRITE"] = "write";
			
			$ko["EDIT"] = "수정";
			$en["EDIT"] = "edit";
			
			$ko["DELETE"] = "삭제";
			$en["DELETE"] = "delete";
			
			$ko["NO_DATA"] = "데이터가 존재하지 않습니다.";
			$en["NO_DATA"] = "Data does not exist.";
			
			$ko["SELECT_ALL_ITEM"] = "전체항목선택";
			$en["SELECT_ALL_ITEM"] = "Select all item";
			
			$ko["SELECT_ITEM"] = "항목선택";
			$en["SELECT_ITEM"] = "Select item";
			
			/* menu */
			$ko["ROOT"] = "최상위";
			$en["ROOT"] = "root";
			
			$ko["MENU_NAME"] = "메뉴이름";
			$en["MENU_NAME"] = "Menu name";
			
			$ko["REF_MENU_NAME"] = "참조메뉴이름";
			$en["REF_MENU_NAME"] = "Ref menu name";
			
			$ko["MENU_URL"] = "메뉴 URL";
			$en["MENU_URL"] = "Menu URL";
			
			$ko["MENU_CODE"] = "메뉴코드";
			$en["MENU_CODE"] = "Menu code";
			
			$ko["REF_MENU_CODE"] = "참조메뉴코드";
			$en["REF_MENU_CODE"] = "Ref menu code";
			
			$ko["Logout ok."] = "로그아웃 되었습니다.";
			$en["Logout ok."] = "Logout ok.";
			
			$ko["LOGIN_OK"] = "로그인 되었습니다.";
			$en["LOGIN_OK"] = "Login ok.";
			
			$ko["LOGIN_NO"] = "로그인에 실패하였습니다 !";
			$en["LOGIN_NO"] = "Login failed !";
			
			$ko["WORK_FLAG_IS_EMPTY"] = "작업타입이 없습니다.";
			$en["WORK_FLAG_IS_EMPTY"] = "missing wor_flag.";
			
			$ko["RESULT_ERROR"] = "작업실패, 관리자에게 문의바랍니다.";
			$en["RESULT_ERROR"] = "Result error!";
			
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