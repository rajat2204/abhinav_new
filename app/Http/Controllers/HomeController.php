<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
    	// dd($data['blog']);
		return view('front_home',$data);
    }

    public function aboutUs(Request $request){
    	$data['view']='front.about';
		return view('front_home',$data);
    }

    public function contactUs(Request $request){
    	$data['view']='front.contact';
		return view('front_home',$data);
    }

    public function interview(Request $request){
        $data['view']='front.interview';
        return view('front_home',$data);
    }

    public function blogs(Request $request){
    	$data['view']='front.blog';
		return view('front_home',$data);
    }
}
