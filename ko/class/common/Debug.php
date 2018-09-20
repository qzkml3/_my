<?
	
	Class Debug
	{
		static $hasDoctype = false;
		
		static function isDebugMode() {
			if ($_SERVER["REMOTE_ADDR"] == "127.0.0.1") {
				return true;
			} else {
				return false;
			}
		}
		
		static function setDebugModeToJS() {
			echo '
				<script>
					FRAMEWORK_IS_DEBUG_MODE = ' . self::isDebugMode() . '
				</script>
			';
		}
		
		static function console_tracePage($str) {
			if (self::isDebugMode()) {
				if (!self::$hasDoctype) {
					self::$hasDoctype = true;
					echo "<!doctype html>";
				}
				$str = str_replace("//", "/", $str);
				JS::console_log('[debug] trace page: ' . $str);
			}
		}
	}

?>