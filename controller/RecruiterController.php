<?php
namespace App\controller;

use App\lib\Controller;
use App\lib\Request;
use App\lib\Response;
use App\lib\Session;
use App\lib\DB;
use App\lib\Filter;
use App\resources\ApplicationResource;

class RecruiterController extends Controller
{
    function __construct(){
        if(Session::get('role') == 1){
            Response::redirect('unauthorised');
        }
    }

    public function profile(Request $request,$id){
        $app = new ApplicationController();
        $this->show('profile', $app->details($id));
    }

    public function getList(Request $request){
        $sql = "
        SELECT *, 
        (SELECT email FROM users WHERE id = application.user_id) AS email
        FROM application 
        ";
        $db = new DB();
        $filters = [
            \App\filters\skills::class,
            \App\filters\certification::class,
            \App\filters\name::class,
            \App\filters\city::class,
            \App\filters\state::class,
            \App\filters\experience::class,
        ];
        $query = [];
        foreach($filters as $f){
            $q = $f::call($request);
            if ($q != null){
                array_push($query,$q);
            }
        }
        if(count($query) > 0){
            $sql = $sql.' WHERE ';
            $sql = $sql.implode(' and ',$query);
        }
        
        $sql = $sql." ORDER BY ";

        $sorting = [
            \App\filters\skills::class,
            \App\filters\certification::class,
        ];
        $query = [];
        foreach($sorting as $s){
            $q = $s::call($request);
            if ($q != null){
                array_push($query,$q);
            }
        }
        if(count($query) > 0){
            $sql = $sql.implode(' desc, ',$query);
            $sql = $sql.' desc, ';
        }

        $sort_by = json_decode($request->get('sort_by'));
        $sql = $sql.$sort_by->column.' '.$sort_by->order;
        $page = $request->has('page') ? $request->get('page') : 1;
        $limit = 25;
        $result = $db->paginate($sql,$limit,$page);
        return Response::json($result,200);
    }

    public function list(Request $request){
        $this->show('dashboard');
    }
}