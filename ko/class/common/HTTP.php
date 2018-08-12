<?php

	class HTTP {
		static public function setHeader() {
			date_default_timezone_set("UTC");

			$last_modified = date('D, d M Y H:i:s T', filemtime($_SERVER["SCRIPT_FILENAME"]));
			$if_modified_since = date('D, d M Y H:i:s T', strtotime($_SERVER["HTTP_IF_MODIFIED_SINCE"]));
			$b_file_modified = $last_modified != $if_modified_since;

			header("Last-Modified: $last_modified");

			if ($b_file_modified) {
				header("Cache-Control: must-revalidate, max-age=0");
				header("pragma: no-nocache");
				header("Expires: -1");
			}
		}
	}

?>