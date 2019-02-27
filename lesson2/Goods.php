<?php
	abstract class Goods{
		private $name;
		private $price;
		function __construct($name, $price){
			$this->setName($name);
			$this->setPrice($price);
		}
		
		abstract function finalPrice ();	
		
		function setName($name){
			$this->name = $name;
		}
		function getName(){
			return $this->name;
			
		}
		function setPrice($price){
			$this->price = $price;
		}
		function getPrice(){
			return $this->price;
			
		}
		function __call($_name, $_param){
	         echo "<p>Метод не существует</p>";
			
		}
	}
	
?>