<?php
	Class DB {
		static function getDB() {
			$host = 'localhost';
			$id = 'root';
			$pw = 'root';
			$dbName = '_my';

			$db = new mysqli($host, $id, $pw, $dbName);
			$db->set_charset("UTF8");

			return $db;
		}
		
		static function execute($query) {
			DevUtil::consoleLog($query);
			return DB::getDB()->query($query);
		}
		
		static function getData($query) {
			DevUtil::consoleLog($query);
			return DB::getDB()->query($query)->fetch_assoc();
		}
		
		static function getList($query) {
			DevUtil::consoleLog($query);
			
			$list = array();
			$db_result = DB::getDB()->query($query);
			while ($row = $db_result->fetch_assoc()) {
				array_push($list, $row);
			}
			return $list;
		}
	}
?>