<?php

	Class CodeService
	{
		static function getList() {
			$db = DB::getDB();

			$sql = DBQuery::select("code");

			return $dataList = $db->query($sql);
		}
	}

?>