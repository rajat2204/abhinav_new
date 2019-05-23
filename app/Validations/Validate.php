<?php

namespace Validations;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class Validate
{
	protected $data;
	public function __construct($data){
		$this->data = $data;
	}

	private function validation($key){
		$validation = [
			'id'				=> ['required'],
			'email'				=> ['nullable','email'],
			'req_email'			=> ['required','email'],
			'first_name' 		=> ['required','string'],
			'name' 				=> ['required','string'],
			'last_name' 		=> ['nullable','string'],
			'phone_code' 		=> ['nullable','required_with:mobile_number','string'],
			'mobile_number' 	=> ['required','numeric'],
			'req_mobile_number' => ['required','required_with:phone_code','numeric'],
			'country' 			=> ['required','string'],
			'address'           => ['nullable','string','max:1500'],
			'description'       => ['required','string'],
			'key_points'       	=> ['required','string','max:1500'],
			'title'             => ['required','string'],
			'profile_picture'   => ['required','mimes:doc,docx,pdf'],
			'pin_code' 			=> ['nullable','max:6','min:4'],
			'type' 	           	=> ['required','string'],
			'phone' 	        => ['required','numeric','digits:10'],
			'location' 	        => ['required','string'],
			'password'          => ['required','string','max:50','min:6'],
			'price'				=> ['required','numeric'],
			'pricing'			=> ['nullable','numeric'],
			'start_from'		=> ['required'],
			'photo'				=> ['required','mimes:jpg,jpeg,png'],
			'photomimes'		=> ['nullable','mimes:jpg,jpeg,png'],
			'photo_null'		=> ['nullable'],
			'slug_no_space'		=> ['required','alpha_dash','max:255'],
			'password_check'	=> ['required'],
			'newpassword'		=> ['required','max:10'],
			'area'				=> ['required','numeric'],
			'areaProperty'		=> ['nullable','numeric'],
			'gallery'			=> ['required','mimes:jpg,jpeg,png'],
			'gallery_null'		=> ['nullable'],
			'url' 				=> ['required','url'],
			'pincode' 			=> ['nullable','min:6','max:6'],
            'req_pincode'       => ['required','min:6','max:6'],
			'req_adhaar' 		=> ['required','min:12','max:12'],
			'commission' 		=> ['nullable','numeric','between:0,99.99'],
            'amount'            => ['required','numeric'],
			'late_amount'		=> ['nullable','numeric'],
            'action'            => ['required'],
			'percentage'		=> ['required','numeric','between:0,99.99'],
			'password_null' 	=> ['nullable'],
		];
		return $validation[$key];
	}

	public function login(){
        $validations = [
            'email' 		       	 => $this->validation('req_email'),
			'password'       	   => $this->validation('password'),
		];
		
        $validator = \Validator::make($this->data->all(), $validations,[
    		'email.required'     => 'E-mail is required.',
    		'password.required'  => 'Password is required.',
        ]);
        return $validator;		
	}


    public function addBlog($action='add'){
        $validations = [
        	'category_id' 	=> $this->validation('name'),
            'title'         => $this->validation('name'),
            'slug'  		=> array_merge($this->validation('slug_no_space'),[Rule::unique('blog')]),
			'description'  	=> $this->validation('description'),
        	'image' 		=> $this->validation('photo'),
    	];

    	if($action =='edit'){
			$validations['image'] 			= $this->validation('photo_null');
			$validations['slug'] = array_merge($this->validation('slug_no_space'),[
				Rule::unique('blog')->where(function($query){
					$query->where('id','!=',$this->data->id);
				})
			]);
		}
    	
        $validator = \Validator::make($this->data->all(), $validations,[
    		'category_id.required' 		   =>  'Category Name is required.',
    		'title.required' 	           =>  'Blog Title is required.',
    		'slug.required'     		   =>  'Blog Slug is Required.',
      		'slug.unique'     			   =>  'This Blog Slug has already been taken.',
      		'slug.alpha_dash'     		   =>  'No spaces allowed in Blog slug.The Slug may only contain letters, numbers, dashes and underscores.',
    		'description.required' 		   =>  'Blog Description is required.',
    		'image.required' 		       =>  'Blog Image is required.',
            'image.mimes'                  =>  'Image should be in jpg,jpeg or png format.',

    	]);
        return $validator;		
	}

	public function createCategory($action='add'){
        $validations = [
            'name' 		        => $this->validation('name'),
            'slug'  			=> array_merge($this->validation('slug_no_space'),[Rule::unique('category')]),
    	];

    	if($action =='edit'){
			$validations['slug'] = array_merge($this->validation('slug_no_space'),[
				Rule::unique('category')->where(function($query){
					$query->where('id','!=',$this->data->id);
				})
			]);
		}
    	
      	$validator = \Validator::make($this->data->all(), $validations,[
      	'name.required'     			=> 'Category Name is Required.',
      	'slug.required'     			=> 'Category Slug is Required.',
      	'slug.unique'     				=> 'This Category Slug has already been taken.',
      	'slug.alpha_dash'     			=> 'No spaces allowed in category slug.The Slug may only contain letters, numbers, dashes and underscores.',
      	]);
      	return $validator;		
	}

	public function addsocialmedia(){
		$validations = [
        	'url' 				=> $this->validation('url'),
    	];
    	
		$validator = \Validator::make($this->data->all(), $validations,[
			'url.required'			=>	'Social Media URL is required.',
		]);
		return $validator;
	}
}
