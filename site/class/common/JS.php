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
		echo $str;
		echo "
				<script>
					alert('$str');
				</script>
			";
	}

	static function console_log($str) {
		echo "
				<script>
					console.log('$str');
				</script>
			";
	}
}

?>