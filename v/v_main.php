<?php
/**
 * Основной шаблон
 * ===============
 * $title - заголовок
 * $content - HTML страницы
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="v/style.css"/>
    <title><?= $title ?></title>
</head>
<body>
<div id="header">
    <h1><?= $title ?></h1>
</div>

<div id="menu">
    <a href="index.php">Главная</a> |
    <a href="index.php?c=page&act=edit">Редактировать текст</a> |
    <a href="index.php?c=user&act=auth">Войти</a> |
    <a href="index.php?c=user&act=reg">Зарегистрироваться</a>
</div>

<div id="content">
    <?= $content ?>
</div>

<div id="footer">
    Все права защищены. Адрес. Телефон.
</div>
</body>
</html>
