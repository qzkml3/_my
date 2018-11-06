<?php
	Class Request {
		static function getParam($name) {
			$request = $_GET + $_POST;
			$param = $request[$name];
			return $param;
		}
		
		/**
		 * @return $req_params: array
		 */
		static function getParameters() {
			$req_params = $_GET + $_POST;
			return $req_params;
		}
		
		/**
		 * @return a=a&b=b
		 */
		static function getQueryString() {
			return $_SERVER["QUERY_STRING"];
		}
		
		static function replaceQueryString($replacement) {
			$req_params = self::getParameters();
			
			$result = array_merge($req_params, $replacement);
			
			foreach($result as $key => $val) {
				$result[$key] = $key . "=" . $val;
			}
			return join("&", $result);
		}
	}
?>