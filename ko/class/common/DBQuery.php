<?php

	Class DBQuery
	{
		static function select($table) {
			$sql = "
				select * from $table
			";
			return $sql;
		}
	}