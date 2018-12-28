<?php
	Class DB {
		static function getDB() {
			$id = Setting::DB_ID;
			$pw = Setting::DB_PASSWORD;
			$host = Setting::DB_HOST;
			$dbName = Setting::DB_NAME;

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
			$result = DB::getDB()->query($query)->fetch_assoc();
			DevUtil::consoleLog($result);
			return $result;
		}
		
		static function getList($query) {
			DevUtil::consoleLog($query);
			
			$list = array();
			$db_result = DB::getDB()->query($query);
			
			while ($row = $db_result->fetch_assoc()) {
				array_push($list, $row);
			}
			
			DevUtil::consoleLog($list);
			return $list;
		}
	}
?>