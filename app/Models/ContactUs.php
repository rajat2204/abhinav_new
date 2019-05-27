<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contactus';
    protected $fillable = ['id','name','email','message','status','created_at','updated_at'];

    public static function change($userID,$data){
        $isUpdated = false;
        $table_category = \DB::table('contactus');
        if(!empty($data)){
            $table_category->where('id','=',$userID);
            $isUpdated = $table_category->update($data); 
        }
        return (bool)$isUpdated;
    }

    public static function add($data){
        if(!empty($data)){
            return self::insertGetId($data);
        }else{
            return false;
        }   
    }
}
