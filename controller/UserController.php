<?php
namespace App\controller;

use App\lib\Controller;
use App\lib\Request;
use App\lib\Response;
use App\lib\Session;
use App\lib\DB;

class UserController extends Controller
{
    public function index(Request $request){
        return Response::redirect('login');
    }

    public function signup(Request $request){
        $this->show('signup');
    }

    public function login(Request $request){
        $this->show('login');
    }

    public function logout(Request $request){
        Session::end();
        Response::redirect('login');
    }

    public function unauthorised(Request $request){
        $this->show('unauthorised');
    }

    public function addUser(Request $request){
        $sql="
        INSERT INTO users (email,password,role) 
        values ('{$request->data->email}',
        '".md5($request->data->password)."',
        ".$request->data->role.")
        ";
        $db = new DB();
        $db->execute($sql);
        return Response::json("Added user successfully",200);
    }

    public function validateUser(Request $request){
        $sql="
        SELECT id, role FROM users where email = '".$request->data->email."'
        and password = '".md5($request->data->password)."' limit 1;
        ";
        $db = new DB();
        $db->execute($sql);
        $data = $db->first();
        if( $data !== null){
            Session::set('id',$data['id']);
            Session::set('role',$data['role']);
            Session::set('token',md5($request->data->email.strtotime("now")));
            $sql = "UPDATE users SET token = '".Session::get('token')."' WHERE id = ".$data['id'].";";
            $db->execute($sql);
            return Response::json(['message'=>"Logged in successfully",'token'=>Session::get('token')],200);
        };
        return Response::json("Log in failed",500);
    }
}