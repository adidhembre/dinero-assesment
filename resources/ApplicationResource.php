<?php
namespace App\resources;

use App\lib\Session;

class ApplicationResource
{
    public static function collection($value){
        $required = ['id','user_id','first_name','last_name',
            'phone','email', 'address_line_1','address_line_2',
            'city','state', 'pincode','skills','certification',
            'reference_id', 'comment', 'resume', 'dob_month','dob_day','dob_year'
        ];
        foreach($required as $k){
            $data[$k] = self::set($k,$value);
        }
        $data['experience'] = self::set('experience',$value,'0');
        if($data['phone'] != ''){
            $split = explode('-',$data['phone']);
            $data['area_code'] = $split[0];
            $data['phone_number'] = $split[1];
        }
        return $data;
    }

    private static function set($key,$value,$option=''){
        return isset($value[$key]) ? $value[$key] : $option;
    }
}