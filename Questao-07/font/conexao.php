<?php
class Connect{
		public static $curso;

		public static function getInstance(){
			if(!isset(self::$curso)){
				self::$curso = new PDO('mysql:host=localhost;dbname=utddep;', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$curso->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$curso->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
			}
			return self::$curso;
		}
	}
?>