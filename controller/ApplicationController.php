<?php
namespace App\controller;

use App\lib\Controller;
use App\lib\Request;
use App\lib\Response;
use App\lib\Session;
use App\lib\DB;
use App\resources\ApplicationResource;

class ApplicationController extends Controller
{
    private function keepPrivate(){
        if(Session::get('role') == 0){
            Response::redirect('unauthorised');
        }
    }

    public function details($id = null){
        $id = $id == null ? Session::get('id') : $id;
        $sql = "
        select users.email, application.*,
        month(dob) dob_month, day(dob) dob_day, year(dob) dob_year
        from application 
        right join users on users.id = application.user_id and users.role = 1
        where users.id = {$id} limit 1;
        ";
        $db = new DB();
        $db->execute($sql);
        return ApplicationResource::collection($db->first());
    }

    public function edit(Request $request){
        $this->keepPrivate();
        $this->show('application', $this->details());
    }

    public function save(Request $request){
        $this->keepPrivate();
        $data = $request->only(['first_name','last_name',
        'address_line_1','address_line_2', 'city','state', 
        'pincode','skills','certification', 'reference_id', 
        'comment', 'experience']);
        $data['user_id'] = Session::get('id');
        $data['full_name'] = $data['first_name'].' '.$data['last_name'];
        $dob = $request->only(['dob_year','dob_month','dob_day']);
        $phone = $request->only(['area_code','phone_number']);
        if(!array_search("", $dob) !== false){
            $data['dob'] = implode('-',$dob);
        }
        if(!array_search("", $phone)){
            $data['phone'] = implode('-',$phone);
        }
        if($_FILES['file']['name'] != ''){
            $location = __DIR__."/../public/assets/storage/".$data['user_id'].".pdf";
            if(file_exists($location)) {
                chmod($location,0755); //Change the file permissions if allowed
                unlink($location); //remove the file
            }
            move_uploaded_file($_FILES['file']['tmp_name'], $location);
            $data['resume'] = $data['user_id'].".pdf";
        }
        $db = new DB();
        $id = $db->findOrNew('application',$data);
        return Response::json("Application saved successfully",200);;
    }
}