<?php
namespace App\filters;

class experience{
    private static $key = 'experience';
    private static function applyFilter($val){
        return self::$key." ".$val->operator." ".$val->value." ";
    }

    public static function call($request){
        if($request->has(self::$key)){
            return self::applyFilter(json_decode($request->get(self::$key)));
        }
        return null;
    }
}