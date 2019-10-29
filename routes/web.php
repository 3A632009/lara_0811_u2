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

//1.1設定 Route 回傳字串
//Route::get('/',function(){
//    return'welcome';
//});

//1.2設定 Route 回傳 view
Route::get('/',function(){
    return view('welcome');
});

//1.3設定 Route 跳轉頁面
//Route::get('/',function(){
//return redirect('welcome');
//});

//2.1修改 Route 接受參數
Route::get('hello/{name}',function($name){
    return'Hello,'.$name;
});



