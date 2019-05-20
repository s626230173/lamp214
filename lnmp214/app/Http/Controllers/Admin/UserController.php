<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function add()
    {
    	return view('admin/user/add');
    }
    public function insert(){
    	echo '这是post';
    }
    public function edit($id)
    {
    	echo '显示单条数据'.$id;
    }
    public function index()
    {
    	echo '列表页面';
    }
    public function demo()
    {
    	return redirect()->route('ar');
    }
}
