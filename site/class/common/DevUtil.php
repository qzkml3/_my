<?
	
	Class DevUtil
	{
		static $hasDoctype = false;
		
		static function isDevMode() {
			$dev_ip = "127.0.0.1"; //dev mode ip
			if ($_SERVER["REMOTE_ADDR"] == $dev_ip) {
				return true;
			} else {
				return false;
			}
		}
		
		static function isProdMode() {
			return !self::isDevMode();
		}
		
		static function setDevModeToJS() {
			echo '
				<script>
					FRAMEWORK_IS_DEV_MODE = ' . self::isDevMode() . ';
				</script>
			';
		}
		
		static function consoleLog($obj) {
			if (self::isDevMode()) {
				if (!self::$hasDoctype) {
					self::$hasDoctype = true;
					echo "<!doctype html>";
				}
				
				if (is_array($obj)) {
					foreach($obj as $key => $val) {
						$str = $key . " = " . $val;
						Js::consoleLog($str);
					}
				} else {
					$obj = str_replace("'", "\'", $obj);
					Js::consoleLog($obj);
				}
			}
		}
	}
?>