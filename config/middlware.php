<?php
namespace App\config;
use App\lib\Response;
use App\lib\Session;
use App\lib\DB;

class middleware
{

    public static function get(){
        if(!Session::has('token')) Response::redirect('login');
        return true;
    }

    public static function logged_in(){
        if(Session::has('token')){
            if(Session::get('role') == 0){
                Response::redirect('list');
            }
            else{
                Response::redirect('application');
            }
        }
        return true;
    }

    public static function api(){
        http_response_code(500);
        header("HTTP/1.1 500 Internal Server Error");
        return true;
    }

    public static function auth(){
        if(Session::has('id') && Session::has('token')){
            $sql = "
            SELECT token from users where id = ".Session::get('id').";
            ";
            $db = new DB();
            $db->execute($sql);
            $data = $db->first();
            if($data['token'] == Session::get('token')){
                return true;
            }
        }
        return false;
    }
}