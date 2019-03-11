<?php
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
  
  // формируем массив картинок
  
  $scan = scandir ("gallery_img/small");
  $scan = array_slice($scan, 2);
  
  $date = date("c");
  $header = array(
     'date' => $date,
	 'title' => 'Шапка сайта'
  );
  
  // передаём в шаблон переменные и значения
  // выводим сформированное содержание
  $content = $template->render(array(
    'items' => $scan,
	'footer' => 'Подвал сайта',
	'header' => $header
  ));
  echo $content;
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>