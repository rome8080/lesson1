<?php

     class Phone {
		 private $name;
		 private $price;
		 private $color;
		 static  $address = "Saratov";
		 function __construct($name, $price, $color){
			 $this->setName($name);
			$this->setPrice($price);
			$this->setColor($color);
		 }
		 function setName($name){
			 $this->name = $name;
		 }
		 function setPrice($price){
			 $this->price = $price;
		 }
		 function setColor($color){
			 $this->color = $color;
		 }
		 function getName(){
			return $this->name;
			
		}
		function getPrice(){
			return $this->price;
			
		}
		function getColor(){
			return $this->color;
			
		}
		function views(){
			echo "Телефон: ".$this->getName()." Цена: ".$this->getPrice()."Цвет: ".$this->getColor()."<br>";
		}
		static function conclusion(){
			echo "Адрес -".self::$address."<br>";
		}
	 }
	 
	 $obj = new Phone ("Alcatel", 2000, "Красный");
	 $obj->views();
	 $obj->conclusion();