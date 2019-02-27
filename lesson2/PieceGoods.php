<?php 
	function  __autoload($class_name) {
          require_once $class_name.".php";
    }

	class PieceGoods extends Goods {
		
		 function finalPrice (){
			return $this->getPrice();
		}	
		
	}
	$obj = new PieceGoods('fone', 2000);
	echo $obj->finalPrice ();

?>