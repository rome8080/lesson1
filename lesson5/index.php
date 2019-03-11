<?php
	session_start();
	
	
	if(!empty($_SESSION['login'])){
		header("Location: http://lesson1/lesson5/controller/user.php");
	}
	else{
		require 'controller/main.php';
	 
	}