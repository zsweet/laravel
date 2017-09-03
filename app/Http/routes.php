<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::resource('articles', 'ArticlesController');




/*
Route::group(['middlewareGroups' => ['web']], function () {
	Route::get('/articles', 'ArticlesController@index')->name('articles.index');
	Route::get('/articles/{id}', 'ArticlesController@show')->name('articles.show');
	Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
	Route::post('/articles', 'ArticlesController@store')->name('articles.store');
	Route::get('/articles/{id}/edit', 'ArticlesController@edit')->name('articles.edit');
	Route::patch('/articles/{id}', 'ArticlesController@update')->name('articles.update');
	Route::delete('/articles/{id}', 'ArticlesController@destroy')->name('articles.destroy');
});
*/
/*



//home page
Route::get('/home', 'StaticPagesController@home')->name('home');

//about page
Route::get('/about', 'StaticPagesController@about')->name('about');


Route::get('/myerror', function () {
    return view('errors/503',[ 'message' => '参数传递出错界面!!!' ]);
});

Route::get('/myhome', 'MyHomeController@home')->name('myhome');


Route::get('name', function () {
    return '一万只草泥马呼啸而过！！！';
});

中间件用于过滤 首先在原来的控制器、路由是不用修改的，增加过滤只要指向中间件就好了，这里
框架里为了增加可读性而增加了kernel，可以注册，也就是给原来中间件的位置起一个别名

Route::get('/young/{age}', 'Mycontroller@young')->middleware('young');
*/