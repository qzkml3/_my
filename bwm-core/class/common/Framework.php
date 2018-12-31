<?php

	class Framework
	{
		static function headerRemove($name) {
			if (function_exists("header_remove")) {
				header_remove($name);
			} else {
				header($name . ":");
			}
		}
		
		static function setSession() {
			session_start();
			
			self::headerRemove("Cache-Control");
			self::headerRemove("Pragma");
			self::headerRemove("Expires");
		}
	}
?>