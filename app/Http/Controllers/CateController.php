<?php

namespace App\Http\Controllers;

use App\Cate;
use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function show(Cate $cate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function edit(Cate $cate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cate $cate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cate $cate)
    {
        //
    }
    public function getAdd(){
         $parent = Cate::select('id','name','parent_id')->get()->toArray();
        return view('admin.cate.add',compact('parent'));
    }
     public function getlist(){
        $data = Cate::select('id','name','parent_id')->orderBy('id','DESC')->get()->toArray();
        return view('admin.cate.list');
    }
    public function postAdd(CateRequest $request){
       $cate = new Cate;
       $cate->name = $request->txtCateName;
       $cate->alias =$request->txtCateName;
       $cate->order =$request->txtOrder;
       $cate->parent_id =1;
       $cate->keywords =$request->txtKeywords;
       $cate->description  =$request->txtDescription;
       $cate->save();
       return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete']);
    }
}
