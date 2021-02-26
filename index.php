<?php
// подгружаем и активируем авто-загрузчик Twig-а
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    // указывае где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('template');

    // инициализируем Twig
    $twig = new Twig_Environment($loader);

    // подгружаем шаблон
    $template = $twig->loadTemplate('contents.tmpl');

    // передаём в шаблон переменные и значения
    // выводим сформированное содержание

    $images = array_diff( scandir( "images"), array('..', '.'));
    $date = date('d.m.Y');

    $content = $template->render(array(
        'images' => $images,
        'date' => $date
    ));

    echo $content;

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
?>