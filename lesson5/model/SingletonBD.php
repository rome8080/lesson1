<?php 
     require_once '../configuration/configuration.php';
	 
	 try{
		 trait request {
		     function selectAll(){
				 $sth = $this->connect->prepare('SELECT * FROM user');
				 $sth -> execute(); 
			     return  $sth->fetchAll(PDO::FETCH_ASSOC);

		    }
			     function selectOne($login){
					 
				$sth = $this->connect->prepare('SELECT * FROM user WHERE login = ?');				
				 $sth -> execute(array($login)); 
			     return  $sth->fetch();

		    }
	    }
		 class SingletonBD  {
			
			private static $db;	
			private  $connect;
			public   $info;
			use request;
			private function __construct (){
				$connect_str = DB_DRIVER . ':host='. DB_HOST . ';dbname=' . DB_NAME.';charset='.SHARSET;
				$this->connect = new PDO($connect_str,DB_USER,DB_PASS);
			}	 
						
			static function getObject(){
				if(empty(SingletonBD::$db)){
				SingletonBD::$db = new SingletonBD;
				
				}
			    return SingletonBD::$db;
			}
			
		    
		 } 
	 }
	 catch(PDOException $e){
		 die("Error: ".$e->getMessage());
	 }
	 
	 
	 
	
	
		
		
?>
	 