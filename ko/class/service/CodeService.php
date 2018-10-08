<?php

	Class CodeService
	{
		static function getListCode($code_ref) {
			$db = DB::getDB();

			$query = DBQuery::select("code");
			if ($code_ref == "") {
				$query = DBQuery::where($query, "code_ref is null");
			} else {
				$query = DBQuery::where($query, "code_ref = $code_ref");
			}
			$query = DBQuery::orderBy($query, "code_name asc");

			//echo $query;

			return $dataList = $db->query($query);
		}
	}

?>