<?php
namespace App\filters;

class city{
    private static $key = 'city';
    private static function applyFilter($val){
        return self::$key." like '%$val%'";
    }

    public static function call($request){
        if($request->has(self::$key)){
            return self::applyFilter($request->get(self::$key));
        }
        return null;
    }
}