<?php

class DB{

    protected $connection;

    // При создании объекта класса DB создается подключение к базе данных
    public function __construct ($host, $user, $password, $db_name){
        $this->connection = new mysqli($host, $user, $password, $db_name);

        if ( mysqli_connect_error() ){
            throw new Exception('Could not connect to DB');
        }
    }

    public function query($sql){

        // Проверка, актуально ли соединение с сервером баз данных
        if ( !$this->connection ){
            return false;
        }

        // Запрос к базе данных
        $result = $this->connection->query($sql);

        // Если запрос невозможно исполнить, то бросается исключение с описанием ошибки
        if ( mysqli_error($this->connection) ){
            throw new Exception(mysqli_error($this->connection));
        }

        // Случай, когда запрос не связан с получением данных
        if ( is_bool($result) ){
            return $result;
        }

        $data = array();
        while ( $row = mysqli_fetch_assoc($result) ){
            $data[] = $row;
        }


        // Очистка памяти, которая была выделена для хранения результата запроса, а также возвращение полученных данных
        mysqli_free_result($result);

        return $data;

    }
/*
    public function escape($str){
        return mysqli_escape_string($this->connection, $str);
    }   */
}