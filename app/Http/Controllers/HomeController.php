<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Press;
use App\Models\SocialMedia;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Validations\Validate as Validations;

class HomeController extends Controller
{
    public function __construct(Request $request){
        parent::__construct($request);
    }

    public function index(Request $request){
    	$data['view']='front.index';
        $data['blog'] = _arefy(Blog::where('status','active')->orderBy('id','desc')->limit(3)->get());
        $data['media'] = _arefy(Press::where('status','active')->orderBy('id','desc')->limit(3)->get());
    	$data['social'] = _arefy(SocialMedia::where('status','active')->get());
    	// dd($data['media']);
		return view('front_home',$data);
    }

    public function aboutUs(Request $request){
    	$data['view']='front.about';
        $data['social'] = _arefy(SocialMedia::where('status','active')->get());
		return view('front_home',$data);
    }

    public function contactUs(Request $request){
    	$data['view']='front.contact';
        $data['social'] = _arefy(SocialMedia::where('status','active')->get());
		return view('front_home',$data);
    }

    public function interview(Request $request){
        $data['view']='front.interview';
        $data['social'] = _arefy(SocialMedia::where('status','active')->get());
        return view('front_home',$data);
    }

    public function blogs(Request $request){
    	$data['view']='front.blog';
        $data['social'] = _arefy(SocialMedia::where('status','active')->get());
        $data['category'] = _arefy(Category::where('status','active')->get());
        $where = 'status != "trashed"';
        $data['blogmore'] = _arefy(Blog::list('array',$where));
		return view('front_home',$data);
    }

    public function singleBlog(Request $request,$slug){
        $data['view'] = 'front.singleblog';
        $data['social'] = _arefy(SocialMedia::where('status','active')->get());
        $where = 'slug = "'.$slug.'"';
        $data['blog'] = _arefy(Blog::list('single',$where));
        return view('front_home',$data);
    }

    public function categoryBlog(Request $request){
        $where = 'status = "active"';
        if($request->value !='all'){
            $where.=' AND category_id = '."'$request->value'";
        }
        $data['ajaxblog'] = _arefy(Blog::list('array',$where,['*'],'id-desc'));
        $html= view('front.ajaxcategory',$data);
        return response($html);
    }

    public function press(Request $request){
        $data['view']='front.press';
        $data['social'] = _arefy(SocialMedia::where('status','active')->get());
        $data['press'] = _arefy(Press::where('status','active')->paginate(6));
        // dd($data['press']);
        return view('front_home',$data);
    }

    public function pageNotFound()
    {
        return view('errors.404');
    }
}
