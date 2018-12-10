<?php

class Js
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
		$str = str_replace("'", "\'", $str);
		echo "
				<script>
					console.log('$str');
				</script>
			";
	}
	
	static function consoleClear() {
		echo "
				<script>
					console.clear();
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
	
	static function locationHref($location) {
		echo "
				<script>
					location.href = '$location';
				</script>
			";
	}
	
	static function locationReload() {
		echo "
				<script>
					location.reload(true);
				</script>
			";
	}
}

?>