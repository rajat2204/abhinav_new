<?php

namespace App\Http\Controllers\Admin;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Validations\Validate as Validations;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function index(Request $request, Builder $builder){
        $data['view'] = 'admin.generalsettings.sociallinks.list';
        \DB::statement(\DB::raw('set @rownum=0'));
        $social  = SocialMedia::where('status','!=','trashed')->orderBy('id',"DESC")->get(['social_links.*', 
                    \DB::raw('@rownum  := @rownum  + 1 AS rownum')]);
       $social = _arefy($social);
       
        if ($request->ajax()) {
            return DataTables::of($social)
            ->editColumn('action',function($item){
                
                $html    = '<div class="edit_details_box">';

                $html   .= '<a href="'.url(sprintf('admin/social/%s/edit',___encrypt($item['id']))).'"  title="Edit Detail"><i class="fa fa-edit"></i></a> ';
                $html   .= '</div>';
                                
                return $html;
            })
            ->editColumn('status',function($item){
                return ucfirst($item['status']);
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        $data['html'] = $builder
            ->parameters([
                "dom" => "<'row' <'col-md-6 col-sm-12 col-xs-6'l><'col-md-6 col-sm-12 col-xs-6'f>><'row filter'><'row white_box_wrapper database_table table-responsive'rt><'row' <'col-md-6'i><'col-md-6'p>>",
            ])
            ->addColumn(['data' => 'rownum', 'name' => 'rownum','title' => 'S No','orderable' => false, 'width' => 1])       
            ->addColumn(['data' => 'url','name' => 'url','title' => 'URL','orderable' => false, 'width' => 120])
            ->addColumn(['data' => 'status','name' => 'status','title' => 'Status','orderable' => false, 'width' => 120])
            ->addAction(['title' => 'Actions', 'orderable' => false, 'width' => 120]);
        return view('admin.home')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['view'] = 'admin.generalsettings.sociallinks.edit';
        $id = ___decrypt($id);
        $data['social'] = _arefy(SocialMedia::where('id',$id)->first());
        return view('admin.home',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $id = ___decrypt($id);
      $validation = new Validations($request);
      $validator  = $validation->addsocialmedia();
      if ($validator->fails()) {
          $this->message = $validator->errors();
      }else{
          $social = SocialMedia::findOrFail($id);
          $data = $request->all();
          
          $social->update($data);
          $this->status   = true;
          $this->modal    = true;
          $this->alert    = true;
          $this->message  = "Social Link has been Updated successfully.";
          $this->redirect = url('admin/social');
      }
      return $this->populateresponse();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
