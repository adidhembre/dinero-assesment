<?php
namespace App\lib;

class Controller
{
    public function show($loc, $params=[]){
        extract($params);
        include __DIR__."/../views/{$loc}.php";
    }
}