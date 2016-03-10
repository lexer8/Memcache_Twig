<?php

class Model{
    protected $db;

    protected $mc;

    // При создании объекта класса Model создается подключение к базе данных и к серверу Memcache
    public function __construct(){

        // Подключение к базе данных
        $this->db = new DB(Config::get('db.host'),
                           Config::get('db.user'),
                           Config::get('db.password'),
                           Config::get('db.name'));

        // Подключение к серверу Memcache
        $this->mc = new Memcache;
        $this->mc->connect('localhost', 11211) or die('Memcache: Невозможно подключиться');
    }

    // Метод получения результата запроса
    public function resultQuery($sql){

        // Генерируется ключ объекта на сервере Memcache
        $key = md5($sql);
        // Получаем данные из сервера Memcache по сгенерированному ключу
        $get_result = $this->mc->get($key);

        // Проверка наличия данных на сервере Memcache
        if ( $get_result ){

            // Выводятся данные по сгенерированному ключу на сервере Memcache, если они существуют
            return array('CACHE', $get_result);

        } else {

            // Если данных на сервере Memcache нет, то реализуется запрос к базе данных
            $result = $this->db->query($sql);

            // Результат запроса записывается на сервер Memcache
            $this->mc->set($key, $result, false, 10);

            // Вывод данных, полученных посредством запроса к базе данных
            return array('DB' ,isset($result[0]) ? $result : null);
        }
    }
}