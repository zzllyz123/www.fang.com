<?php
//后台登录路由
Route::group(['namespace'=>'Admin','prefix'=>'admin','as'=>'admin'],function(){
   Route::get('login','LoginController@index')->name('login');
});