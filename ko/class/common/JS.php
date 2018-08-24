<?php

class JS
{
	public static function confirm($str) {
		echo $str;
		echo "
				<script>
					confirm('$str');
				</script>
			";
	}

	public static function alert($str) {
		echo $str;
		echo "
				<script>
					alert('$str');
				</script>
			";
	}

	public static function console_log($str) {
		echo "
				<script>
					console.log('$str');
				</script>
			";
	}
}

?>