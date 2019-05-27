<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['id','category_id','slug','url','title','image','description','status','created_at','updated_at'];

    public static function change($userID,$data){
        $isUpdated = false;
        $table_category = \DB::table('blog');
        if(!empty($data)){
            $table_category->where('id','=',$userID);
            $isUpdated = $table_category->update($data); 
        }
        return (bool)$isUpdated;
    }

    public function category(){
        return $this->hasOne('App\Models\Category','id','category_id');
    }

    public static function list($fetch='array',$where='',$keys=['*'],$order='id-desc'){
        $table_plots = self::select($keys)
        ->with([
            'category' => function($q){
                $q->select('id','name');
            },
        ]);
        if($where){
            $table_plots->whereRaw($where);
        }
                
        if(!empty($order)){
            $order = explode('-', $order);
            $table_plots->orderBy($order[0],$order[1]);
        }
        if (!empty($limit)) {
            $table_plots->limit($limit);
        }
        if($fetch === 'array'){
            $list = $table_plots->get();
            return json_decode(json_encode($list ), true );
        }
        elseif($fetch === 'paginate'){
            $list = $table_plots->paginate(1);
            return json_decode(json_encode($list ), true );
        }else if($fetch === 'obj'){
            return $table_plots->limit($limit)->get();                
        }else if($fetch === 'single'){
            return $table_plots->get()->first();
        }else if($fetch === 'count'){
            return $table_plots->get()->count();
        }else{
            return $table_plots->limit($limit)->get();
        }
    }
}
