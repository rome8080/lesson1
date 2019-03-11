<?php
	class Render {
		
		    static function rendering($template, $vars = array()){
			foreach ($vars as $k => $v){
	
		         $$k = $v;
	        }
	
	        ob_start();
	        include $template;
	        return ob_get_clean();	
		}
		
	}
	