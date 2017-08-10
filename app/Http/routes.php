<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('pages/about','PagesController@about');

Route::get('contact','PagesController@contact');

Route::get('article','ArticleController@index');

Route::get('/articles','ArticlesController@index');

Route::get('/articles/{id}','ArticlesController@show');

Route::get('/articles/create','ArticlesController@create');

//Route::get('/articles/delete','ArticlesController@delete');

//多请求路由
Route::match(['get','post'],'basic',function(){
		return 'hello world';
});

//路由参数，过滤多个参数
Route::get('user/{id}/{name?}',function($id,$name = 'phper'){
	return $id;
	return $name;
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

//路由别名
Route::get('user/member-center',['as'=>'center',function(){
		return Route('center');
}]);

//路由群组
/*
Route::group(['prefix'=>'member'],function(){
	Route::get('info',function(){
		return 1;
	});
});
*/

//路由视图
Route::get('info',function(){
	return view('info',['name'=>'phper','age'=>18]);
});

//关联控制器
//Route::get('member/info','MemberController@info');
Route::get('member/info',[
	'uses'=>'MemberController@info'
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});