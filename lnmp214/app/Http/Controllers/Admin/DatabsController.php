<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class DatabsController extends Controller
{
    public function tables(){
    	//$rs = DB::select('select * from user');
    	//$rs = DB::insert('insert into user(name,age)value("wangwanw","20")');
    	//$rs = DB::update();
    	//$rs = DB::delete()
    	// DB::statement('drop table users');

    	//pdo占位符命名占位符
    	//$results = DB::select('select * from user where id = :id', ['id' => 1]);
    	//$results = DB::select('select * from user where id = ?,?', [1,'123']);
    	//$rs = DB:: table('user')->where('id',1)->get();
    	/*$arr = ['name'=>'joker_li','age'=>20,];
    	$rs = DB::table('user')->insert($arr);*/
    	/*$arr = [['name'=>'joker_lfff','age'=>20],
    ['name'=>'joker_lqq','age'=>20],
['name'=>'joker_lww','age'=>20]
	];
    	$rs = DB::table('user')->insert($arr);*/
    	/*$arr = ['name'=>'joker_lqqq','age'=>20];
    	$rs = DB::table('user')->insertGetId($arr);*/
    	/*$rs =DB::table('user')->where()->update($arr);
    	$rs = DB::table('user')->where('id','>',2)->update($arr);*/
    	/*$rs = DB::table('user')->where('id',3)->dalete();*/
    	/*$rs = DB::table('user')->where('id',2)->get();*/
    	//$rs = DB::table('user')->get();
    	/*$rs = $mod->select();
    	$rs = $mod->find();*/

    	/*foreach ($rs as $k => $v) {
    		var_dump($v->name);
    	}*/
    	/*$rs = DB::table('user')->where('id',5)->first();*/
    	/*$rs = DB::table('user')->value('name');*/
    	/*$rs = DB::table('user')->pluck('name');*/
    	/*$rs = DB::table('user')->select('name','age')->get();*/
    	/*$rs = DB::table('user')->where('name','like','%s%')->get();*/
    	/*$rs = DB::table('user')->orderBy('age','desc')->get();*/
    	/*$rs = DB::table('user')->paginate(3);
*/
    	/*$rs = DB::table('user')
            ->join('tmp', 'user.id', '=', 'tmp.id')
            ->select('user.name', 'tmp.name')
            ->get();*/
     /*       $rs = DB::table('user')->max('name');*/

     	//foo();
    	/*dump($rs);*/
    	$rs = DB::table('user')->get();
    	return view('admin.user.db',['arr'=>$rs]);
    }
}
