<?php

namespace App\lib;

class Request
{
    public $url,$data,$path;

    function __construct()
    {
        $this->url = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER["REQUEST_METHOD"];
        $this->data = json_decode(json_encode($_REQUEST));
        $this->path = parse_url($this->url)['path'];
    }

    public function only($keys){
        $data = [];
        foreach($keys as $k){
            $data[$k] = $this->data->{$k};
        }
        return $data;
    }

    public function has($key){
        return isset($this->data->{$key});
    }

    public function get($key){
        return $this->data->{$key};
    }
}
  