<?php

class Book extends Model{

    // Метод получаения общего количества книг в базе данных
    public function counter(){
        $sql = 'select count(*) from books';
        return $this->resultQuery($sql);

    }

    // Вывод всех книг из базы данных
    public function getAll(){
        $sql = 'select * from books';
        return $this->resultQuery($sql);
    }

}