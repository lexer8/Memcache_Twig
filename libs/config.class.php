<?php

class Config{

    protected static $settings = array();

    // Метод получения свойств
    public static function get($key){
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }

    // Метод задания свойств
    public static function set($key, $value){
        self::$settings[$key] = $value;
    }

}