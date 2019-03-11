<?php
    session_start();
	
	if(isset($_POST[exitf])){
		unset($_SESSION[login] );
		
	}
	
	
	
	if(!empty($_SESSION['login'])){
		
	spl_autoload_register(function ($class) {
    include '../model/' . $class . '.php';
    });
	// header
	$vars = ['titl'=>'main  cabinet', 'header'=> 'Личный кабинет'];
	echo Render::rendering('../view/head.php', $vars);
	
	$us = $_SESSION[login];
	$vars = ['us'=> $us];
	echo Render::rendering('../view/user.php', $vars);
	
	//footer
	$vars = ['foot'=>'footer site'];
	echo Render::rendering('../view/footer.php', $vars);
	}
	else {
		echo "<a href=\"http://lesson1/lesson5\">Вернуться на главную</a>";
		
	}
	
	