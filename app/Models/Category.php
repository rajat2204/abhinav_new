<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['id','name','status','created_at','updated_at'];

    public static function change($userID,$data){
        $isUpdated = false;
        $table_category = \DB::table('category');
        if(!empty($data)){
            $table_category->where('id','=',$userID);
            $isUpdated = $table_category->update($data); 
        }
        return (bool)$isUpdated;
    }
}
