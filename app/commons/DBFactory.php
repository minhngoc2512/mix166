<?php 
	
	class DBFactory{
		public static $conn;

		
		public static function getInstance(){
			if(!isset(self::$conn)){
				try{

					
				    self::$conn = new mysqli('localhost','root','admin','mix166');
				    self::$conn->query('names set utf8');
				}catch(PDOException $e){
					echo $e->getMessage();
					die();
				}
			}

		}
	}



 ?>