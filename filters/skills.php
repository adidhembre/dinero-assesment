<?php
namespace App\filters;

class skills{
    private static $key = 'skills';
    private static function applyFilter($val){
        return "MATCH(".self::$key.") AGAINST('$val')";
    }

    public static function call($request){
        if($request->has(self::$key)){
            return self::applyFilter($request->get(self::$key));
        }
        return null;
    }
}