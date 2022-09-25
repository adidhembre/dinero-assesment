<?php

namespace App\lib;

class Session
{
    public static function start(){
        session_start();
    }

    public static function end(){
        session_destroy();
    }

    public static function set($key,$data){
        $_SESSION[$key] = $data;
    }

    public static function get($key){
        return $_SESSION[$key];
    }

    public static function has($key){
        return isset($_SESSION[$key]);
    }
}