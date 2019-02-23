<?php
     include "phone.php";
	 
     class SmartPhone extends Phone{
		 private $screen;
		 
		 function __construct ($name, $price, $color, $screen){
			 parent::__construct($name, $price, $color);
			 $this->setScreen($screen);
		 }
		 function setScreen($screen){
			 $this->screen = $screen;
		 }
		 function getScreen(){
			return $this->screen;
			
		}
		function views(){
			
			echo "Телефон: ".$this->getName()." Цена: ".$this->getPrice()."Цвет: ".$this->getColor()." Экран: ".$this->screen."<br>";
			Phone::conclusion();
		}
		
	 }
	 
	 $obj = new SmartPhone ("Smart", 3000, "Зеленый", 8.5);
	 $obj->views();
	 
	 
	 /*
	    Задание 6.
		
		В PHP, если статический атрибут определен в родительском классе, он не может быть переопределен в дочернем классе. 
	    Поэтому выводит: 1122
	 
	    Задание 7.
		
		Если параметры не передаются, то скобки объекта можно не писать.
	 */
	 