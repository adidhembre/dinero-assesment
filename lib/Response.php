<?php

namespace App\lib;

class Response
{
    public static function json($data,$status){
        // $response['status']=$status;
        $response['data']=$data;
        header('', true, $status);
        http_response_code($status);
        echo json_encode($response);
    }

    public static function redirect($loc){
        header("Location: /{$loc}"); 
        exit();
    }
}