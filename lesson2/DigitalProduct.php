<?php 
	spl_autoload_register(function ($class) {
    include  $class . '.php';
});

	class DigitalProduct extends Goods {
		
		 function finalPrice (){
			 
			return $this->getPrice() / 2;
		}	
		
	}
	$obj = new DigitalProduct('fone', 2000);
	echo $obj->finalPrice ();
    $obj->finalCo ();
?>