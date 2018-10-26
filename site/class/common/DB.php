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
	}
?>