<?php

// включаем классы
require_once(ROOT.DS.'libs'.DS.'config.class.php');
require_once(ROOT.DS.'libs'.DS.'DB.class.php');
require_once(ROOT.DS.'libs'.DS.'model.class.php');
require_once(ROOT.DS.'vendor'.DS.'autoload.php');

// Включаем настройки
require_once(ROOT.DS.'configs'.DS.'config.php');

// Включаем модели
require_once(ROOT.DS.'models'.DS.'book.php');

// Регистрируем шаблонизатор Twig
Twig_Autoloader::register();

// Авторизируем шаблонизатор Twig
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

