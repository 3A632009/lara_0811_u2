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
//Route::get('hello/{name}',function($name){
//    return'Hello,'.$name;
//});

//2.3修改參數成選擇性
//Route::get('hello/{name?}',function($name='Everybody'){
//    return'Hello,'.$name;
//});

//4.1將 Route 取名為 hello.index
Route::get('say/{name?}',['as'=>'hello.index',function($name='Everybody'){
    return'Hello,'.$name;
}]);

//5.1設定 dashboard路徑的 Route
Route::get('dashboard',function(){
    return'dashboard';
});

//5.2設定另一個 Route 以群組包起來設定 prefix
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return'admindashboard';
    });
});

//7.1編輯 app/Http/routes.php
Route::get('/',['as'=>'home.index','uses'=>
    'HomeController@index']);
