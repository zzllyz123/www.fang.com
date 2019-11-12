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

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
//包含后台路由
include base_path('routes/admin/route.php');
=======
>>>>>>> e3e41f9c61a3da9ab3dfedabe8064934cbc3d03e
