<?php
    session_start();
	spl_autoload_register(function ($class) {
    include '../model/' . $class . '.php';
    });
	
	if(empty($_POST['login']) or empty($_POST['password'])){
		$_SESSION[answer_form] = 'Заполните все поля';
		header("Location: http://lesson1/lesson5/");
	}
	else {
		ob_start();
		$login = $_POST['login'];
		$password = $_POST['password'];
		$rez = SingletonBD::getObject()->selectOne($login);
		if(empty($rez)){
			$_SESSION[answer_form] = 'Пользователь не найден';
		    header("Location: http://lesson1/lesson5/");
			
		}
		else {
			if($login  == $rez[login] and $password == $rez[password]){
				$_SESSION[login] = $login;
				$_SESSION[password] = $password;
				 header("Location: http://lesson1/lesson5/controller/user.php");
			}
			else {
				$_SESSION[answer_form] = 'Не верный пароль';
		        header("Location: http://lesson1/lesson5/");
				
			}
		}
		
		ob_end_clean();
	}
	