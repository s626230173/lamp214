<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
   public function request(Request $request){
   	//echo $request->method();
   	var_dump($request->isMethod('post'));
   	if ($request->isMethod('get')) {
   		abort('404');
   	}else{
   		echo '请求错误';
   	}
   	var_dump($request->path());
   	var_dump($request->url());
   	dump($request->path());
   	dd($request->ip());
   	dd($request->getPort());
   	dump($_GET['id']);
   	dump($request->input('name'));
   	dump($request->only('id','age'));
   	dump($request->except('id'));
   	dump($request->all());
   	dump($request->input('p','1'));
   	dump($request->has('name'));
   	dump($request->header('host'));
   }
   public function upload(Request $request){
   	if ($request->hasFile('imgs')) {
   		$file = $request->file('imgs');
   		dump($request->imgs);
   		$extentsion = $request->imgs->extension();
   		$rs = $file->getClientOriginalName();
   		$rs = $file->getClientOriginalExtension();
   		$name = 'img_'.rand(1111,9999).time();
   		$suffix = $file->getClientOriginalExtension();
   		$rs = $name.'.'.$suffix;
   		$file->move('./uploads',$rs);
   		$path = './uploads',$rs;
   		dd($path);
   		$img = Image::make($path);
   		$img->crop(100,100,25,25);
   		$nm= $nm.'.'.$suffix;
   		$img->save("./uploads/{$res}");

   		$res['image'] = 'img_'
   		$res['thumb'] = 'thumb_'
   	}
   	fump($rs);
   }
   public function cookie(Request $request){
   	\Cookie::queue('uname','www',20);
   	echo \Cookie::get('uname');
   	echo $request->cookie('uname');
   }
   public function flash(Request $request){
   	$request->flash();
   }
   public function old(Request $request){
   	dump($request->old());
   	if (false) {
   		return redirect('/admin/create')->withInput();
   		return back()->withInput();

   	}else{

   	}
   }
   public function jsons(Request $request){
   	$arr = ['apple','pear','lemon','orange'];
   	$arr = ['name'=>'www','age'=>18,'class'=>'214'];
   	$arr = [
   		['name'=>'www','age'=>20,'class'=>'214'],
   		['name'=>'www','age'=>20,'class'=>'214'],
   		['name'=>'www','age'=>20,'class'=>'214'],
   	];
   	return response()->json($arr);
   }
   public function redirects(){
   	if (true) {
   		return redirect('/admin/create');
   		return redirect()->route('/login');
   	}
   	return redirect('/admin/create')->with('success','添加成功');
   }
}
