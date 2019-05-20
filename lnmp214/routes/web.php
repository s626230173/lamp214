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
	//显示页面信息
    return view('welcome');
});
//读取配置文件的信息
Route::get('/config', function () {
	//返回页面信息  echo  return

    //获取配置信息  Config类名
    // echo Config::get('app.timezone');

    // echo Config::get('app.web_name');

    // echo Config::get('database.migrations');
    //获取环境配置信息
    //env  是laravel框架的辅助函数
    // 
    echo env('DB_DATABASE');
});

Route::get('/create', function(){
    //view辅助函数  form模板的名字
    return view('admin/user/form');

});

Route::post('/create', function(){

    echo '这是post的请求';
});

//参数设置
/*Route::get('/edit/{id}/{name}', function($id, $name){

    echo $id,$name;
});*/
//限制参数
/*Route::get('/edit/{id}/{name}', function($id, $name){

    echo $id,$name;
})->where(['id'=>'\d+','name'=>'\w+']);*/

/*路由别名*/
Route::get('/admin/user/man/create/add/{id}',['as'=>'ac',function($id){

    echo '123'.$id;
}]);
Route::get('/tiaozhuan', function(){
    //redirect重定向  路由别名的跳转
    // return redirect()->route('ac',['id'=>20]);

    //  redirect('路由规则');  普通跳转
    return redirect('/config');
});

//路由组设置
Route::group(['middleware'=>'login'], function(){

    //后台
    Route::get('/admin',function(){});

    //后台的用户
    Route::get('/admin/user', function(){

        echo '666666666';
    });

    //后台的商品
    Route::get('/admin/goods', function(){

        echo '1234567';
    });
});
Route::group([], function(){

    //前台的用户
    Route::get('/home/user','Home\UserController@add');

});

//存储session
Route::get('/session', function(){

    session(['uid'=>10]);
});

Route::get('/login', function(){

    echo '登录页面';
});
//404页面
Route::get('/admin', function(){

    echo '这是后台的首页';

})->middleware('login');

//普通控制器
 Route::get('/admin/users','Admin\UserController@add');
 Route::post('/admin/users', 'Admin\UserController@insert');
 //控制器带参数
Route::get('/admin/edit/{id}', 'Admin\UserController@edit');
//别名
Route::get('/admin/user/index', ['uses'=>'Admin\UserController@index','as'=>'ar']);
//控制器的中间件
/*Route::get('/demo', 'Admin\UserController@demo')->middleware('login');*/
// Route::get('/demo', ['uses'=>'Admin\UserController@demo','middleware'=>'login']);
//资源的控制器
//资源路由
Route::resource('/admin/goods','Admin\GoodsController');

//请求
Route::get('/admin/create','Admin\RequestController@create');
Route::any('/admin/req','Admin\RequestController@request');
Route::any('/admin/upload','Admin\RequestController@upload');
Route::any('/admin/cookie','Admin\RequestController@cookie');
Route::any('/admin/flash','Admin\RequestController@flash');
Route::any('/admin/old','Admin\RequestController@old');
Route::any('/admin/jsons','Admin\RequestController@jsons');
Route::any('./admin/redirects','Admin\RequestController@redirects');
Route::any('admin/views','Admin\ViewController@create');

Route::any('admin/list','Admin\ViewController@list');

//shujuku
Route::any('admin/tables','Admin\DatabsController@tables');