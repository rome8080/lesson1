<?php 
	function  __autoload($class_name) {
          require_once $class_name.".php";
    }

	class ProductWeight extends Goods {
		 private $weight;
		 function __construct($name, $price, $weight){
			parent::__construct($name, $price);
			$this->setWeight($weight);
		}
		function setWeight($weight){
			$this->weight = $weight;
		}
		function getWeight(){
			return $this->weight;
			
		}
		 function finalPrice (){
			return $this->getPrice() * $this->getWeight();
		}	
		
	}
	$obj = new ProductWeight('fone', 2000, 3);
	echo $obj->finalPrice ();

?>