<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
//后台登录显示
    public function index(){
        return view('admin.login.index');
    }
}
