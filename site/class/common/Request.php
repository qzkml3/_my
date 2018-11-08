<?php
	Class Request {
		static function getParam($name) {
			$request = $_GET + $_POST;
			$param = trim($request[$name]);
			return $param;
		}
		
		/**
		 * @return $req_params: array
		 */
		static function getParameters() {
			$req_params = $_GET + $_POST;
			$req_params = StringUtil::trimArray($req_params);
		
			DevUtil::consoleLog($req_params);
			return $req_params;
		}
		
		/**
		 * @return 'a=a&b=b'
		 */
		static function getQueryString() {
			return $_SERVER["QUERY_STRING"];
		}
		
		/**
		 * 쿼리스트링을 원하는 쿼리로 치환하여 리턴한다.
		 * @param $replacement
		 * @return string
		 */
		static function getQueryStringWith($replacement) {
			$req_params = $_GET + $_POST;
			$req_params = StringUtil::trimArray($req_params);
			
			$result = array_merge($req_params, $replacement);
			
			foreach($result as $key => $val) {
				$result[$key] = $key . "=" . $val;
			}
			return join("&", $result);
		}
	}
?>