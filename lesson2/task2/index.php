<?php
     
	 trait go {
		 function Select(){
			 echo "Выбор информации";
		 }
	 }
	 
	
	class Singleton  {
		use go;
		private static $db;
		private $connect;
		
		private function __construct(){
			echo "Соединение установлено<br>";
		}
		static function getObj(){
			if(Singleton::$db == null){
				Singleton::$db = new Singleton;
			}
			return Singleton::$db;
		}
	}
	
	$object = Singleton::getObj();
	$object-> Select();
	
	