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
		
		static function setDoctype() {
				//set doctype for standard mode
				if (!self::$hasDoctype) {
					self::$hasDoctype = true;
					echo "<!doctype html>";
				}
		}
		
		static function consoleLog($obj) {
			if (self::isDevMode()) {
				self:: setDoctype();
				
				// if param is array
				if (is_array($obj)) {
					foreach ($obj as $key => $val) {
						if (is_array($val)) {
							$str = "[" . $key . "]\\n";
							foreach ($val as $key2 => $val2) {
								$str .= $key2 . " = \"" . $val2 . "\";\\n";
							}
						} else {
							$str = $key . " = \"" . $val . "\";\\n";
						}
						Js::consoleLog($str);
					}
				// if param is string
				} else {
					$str = $obj;
					Js::consoleLog($str);
				}
			}
		}
		
		static function keyVal($key, $val) {
			echo "<hr>";
			echo "$key = \"$val\";";
		}
		
		static function val($val) {
			echo "<hr>";
			echo "\"$val\";";
		}
	}

?>