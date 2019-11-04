<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function(){
  return view("welcome");
});

// Route::get('query/select-all',function(){
//   $data = DB::table('khoapham')->get();
//   echo "<pre>"
  
// });

Route::get('test',function(){
   return view('admin.cate.add');
});

Route::group(['prefix'=>'admin'],function(){
   Route::group(['prefix'=>'cate'],function(){
   	  Route::get('list',['as'=>'admin.cate.list','uses'=>'CateController@getlist']);
      Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
      Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
   });
});
