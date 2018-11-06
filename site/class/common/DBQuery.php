<?php
	
	Class DBQuery
	{
		static function select($table) {
			$query = "select * from $table";
			
			return $query;
		}
		
		static function delete($table) {
			$query = "delete from $table";
			
			return $query;
		}
		
		static function insert($table) {
			$query = "insert into $table";
			
			return $query;
		}
		
		static function values($query, $values) {
			$query = $query . " (";
			foreach ($values as $key => $val) {
				$query = $query . $key . ", ";
			}
			$query = substr($query, 0, -2);
			$query = $query . ") values (";
			foreach ($values as $key => $val) {
				$query = $query . "'" . $val . "'" . ", ";
			}
			$query = substr($query, 0, -2);
			$query = $query . ")";
			
			return $query;
		}
		
		static function where($query, $where) {
			$query = "$query where $where";
			
			return $query;
		}
		
		static function _and($query, $where) {
			$query = "$query and $where";
			
			return $query;
		}
		
		static function _or($query, $where) {
			$query = "$query or $where";
			
			return $query;
		}
		
		static function orderBy($query, $orderBy) {
			$query = "$query order by $orderBy";
			
			return $query;
		}
		
		static function limit($query, $limit) {
			$query = "$query limit $limit";
			
			return $query;
		}
	}