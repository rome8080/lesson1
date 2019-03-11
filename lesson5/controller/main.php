<?php
	
	spl_autoload_register(function ($class) {
    include 'model/' . $class . '.php';
    });
	// header
	$vars = ['titl'=>'main  page', 'header'=> 'The header of the site'];
	echo Render::rendering('view/head.php', $vars);
	
	$vars = ['for'=>'controller/forma.php'];
	echo Render::rendering('view/forma.php', $vars);
	unset($_SESSION[answer_form]);
	//footer
	$vars = ['foot'=>'footer site'];
	echo Render::rendering('view/footer.php', $vars);