<?php

class JS
{
	static function confirm($str) {
		echo $str;
		echo "
				<script>
					confirm('$str');
				</script>
			";
	}

	static function alert($str) {
		echo "
				<script>
					alert('$str');
				</script>
			";
	}

	static function consoleLog($str) {
		echo "
				<script>
					console.log('$str');
				</script>
			";
	}
	
	static function alertBack($str) {
		self::alert($str);
		self::historyBack();
		exit;
	}
	
	static function historyBack() {
		echo "
				<script>
					history.back();
				</script>
			";
	}
	
	static function locationReplace($location) {
		echo "
				<script>
					location.replace('$location');
				</script>
			";
	}
	
	static function alertReplace($msg, $location) {
		self::alert($msg);
		self::locationReplace($location);
		exit;
	}
}

?>