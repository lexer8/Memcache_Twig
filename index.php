<?php

// Определяем константы для будущего задания дирректорий
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

// Включаем файл с подключениями классов, настроек и моделей
require_once(ROOT.DS.'libs'.DS.'init.php');


// ------------- ПОЛУЧЕНИЕ ДАННЫХ -------------
// Создаем новый объект класса Book
$book = new Book();

/*
$result = $book->counter();
echo "<pre>";
echo "Количество книг: ";
print_r($result);
*/

// Вызываем метод получения всех книг из базы данных
$result = $book->getAll();



// --------------- ВЫВОД ДАННЫХ ---------------
// Подгружаем файл шаблона
$template = $twig->loadTemplate('content.html');

// Указать переменные
$site_name = Config::get('site_name');  // Название веб-странички
$title = $result[0];                    // Откуда получена информация: из базы данных или Memcache
$books  = $result[1];                   // Результат запроса к базе данных

// Передаем данные
echo $template->render(array(
    'site_name' => $site_name,
    'title'     => $title,
    'books'     => $books,
));
