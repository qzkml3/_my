<?php

	Class DBQuery
	{
		static function select($table) {
			$query = "
				select * from $table
			";

			return $query;
		}

		static  function where($query, $where) {
			$query = "$query where $where";

			return $query;
		}

		static  function orderBy($query, $orderBy) {
			$query = "$query order by $orderBy";

			return $query;
		}

		static  function limit($query, $limit) {
			$query = "$query limit $limit";

			return $query;
		}
	}