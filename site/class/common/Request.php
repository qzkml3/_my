<?php
	Class Request {
		static function getParam($name) {
			$req_params = self::getParameters_Core();
			return $req_params[$name];
		}
		
		static function getParamWith($name, $default) {
			$req_params = self::getParameters_Core();
			if (empty($req_params[$name])) {
			
			}
		}
		
		/**
		 * @return $req_params: array
		 */
		static function getParameters() {
			$req_params = self::getParameters_Core();
			Js::consoleClear();
			Js::consoleLog("# req_param");
			DevUtil::consoleLog($req_params);
			return $req_params;
		}
		
		static function getParameters_Core() {
			$req_params = $_GET + $_POST;
			$req_params = StringUtil::trimArray($req_params);
			return $req_params;
		}
		
		/**
		 * @return 'a=a&b=b'
		 */
		static function getQueryString() {
			$req_params = self::getParameters_Core();
			$req_params = StringUtil::presentArray($req_params, "=", "");
			return join("&", $req_params);
		}
		
		/**
		 * 쿼리스트링을 원하는 쿼리로 치환하여 리턴한다.
		 * @param $replacement
		 * @return string
		 */
		static function getQueryStringWith($replacement) {
			$req_params = self::getParameters_Core();
			$req_params = array_merge($req_params, $replacement);
			$req_params = StringUtil::presentArray($req_params, "=", "");
			return join("&", $req_params);
		}
	}
?>