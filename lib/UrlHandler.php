<?php
namespace App\lib;
use App\lib\Session;

class UrlHandler
{
    private static $VAR_REGX = "/{\K[^}]*(?=})/";
    private static $HIDE_VAR_REGX = "/{(.*)}/";
    private static $REPLACE_HIDDEN_VAR = ".*";

    function __construct()
    {
        Session::start();
        $method = $_SERVER["REQUEST_METHOD"];
        include "routes/".strtolower($method).".php";

        $middlware_check = true;
        $routes_check = false;

        if(isset($ROUTES)){
            $request = new Request();
            // echo $request->path;
            $pattern = "";
            foreach($ROUTES as $path => $function){
                preg_match(self::$VAR_REGX,$path,$vars);
                $value = '$request';
                if(preg_match($this->path_to_regx($path),$request->path)){
                    if(count($vars)>0){
                        $raw_regx = str_replace(self::$REPLACE_HIDDEN_VAR,'|',$this->path_to_regx($path));
                        if(substr($raw_regx, -2) == '|/'){
                            $raw_regx = substr_replace($raw_regx, '', -2, 1);
                        }
                        $vals = preg_split($raw_regx,$request->path);
                        foreach($vals as $v){
                            if($v != null && $v != "/"){
                                $value = $value.",".$v;
                            }
                        }
                    }
                    if(isset($MIDDLWARE)){
                        if(!(isset($MIDDLWARE_AVOID) && in_array($path,$MIDDLWARE_AVOID))){
                            $middlware_check = $this->applyMiddleware($MIDDLWARE);
                        }
                    }
                    if($middlware_check && isset($function[2])){
                        $middlware_check = $this->applyMiddleware($function[2]);
                    }
                    if($middlware_check){
                        eval('$class = new App\controller\\'.$function[0].'();');
                        eval('$class->'.$function[1]."($value);");
                        $routes_check = true;
                    }
                    else{
                        Session::end();
                    }
                    break;
                };
            };
            if(!$routes_check){
                echo "404 Error - Page Not Found";
            }
        }
    }

    private function path_to_regx($path){
        $pattern = preg_replace(self::$HIDE_VAR_REGX, self::$REPLACE_HIDDEN_VAR, trim($path));
        return "/".str_replace("/","\/",$pattern)."/";
    }

    private function applyMiddleware($middlware){
        $middlware_check = true;
        foreach($middlware as $path){
            if(! \App\config\middleware::{$path}()){
                $middlware = false;
                break;
            }
        }
        return $middlware_check;
    }
}