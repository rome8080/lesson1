<?php
   if(!empty($_GET[p])){
	   $src = $_GET[p];
   }
   else{
	   header('Location: index.php');
   }
    // подгружаем и активируем авто-загрузчик Twig-а
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  // указывае где хранятся шаблоны
  $loader = new Twig_Loader_Filesystem('templates');
  
  // инициализируем Twig
  $twig = new Twig_Environment($loader);
  
  // подгружаем шаблон
  $template = $twig->loadTemplate('shop.tmpl');
  
   // формируем массив 
  $date = date("c");
  $header = array(
     'date' => $date,
	 'title' => 'Шапка сайта'
  );
  
  // передаём в шаблон переменные и значения
  // выводим сформированное содержание
  $content = $template->render(array(
    
	'footer' => 'Подвал сайта',
	'header' => $header,
	'src' => $src
  ));
  echo $content;
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>


// не могу понять почему не выводит изображение !!!!!!!!!!!!!!!!!