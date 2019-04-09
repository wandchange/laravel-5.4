<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|您可以在此处为您的应用程序注册Web路由。 这些
| RouteServiceProvider在一个组中加载路由
| 包含“web”中间件组。 现在创造伟大的东西！
*/

Route::get('/', function () {
    return view('welcome');
});

// 文章列表页  第二个参数：命名空间\控制器@方法
Route::get('/posts', '\App\Http\Controllers\PostController@index');
// 文章详情页 绑定模型
//Route::get('/posts/{post}', '\App\Http\Controllers\PostController@show');
Route::get('/posts/{post}/show', '\App\Http\Controllers\PostController@show');
// 创建文章
Route::get('/posts/create', '\App\Http\Controllers\PostController@create');
Route::post('/posts', '\App\Http\Controllers\PostController@store');
// 编辑文章
Route::get('/posts/{post}/edit', '\App\Http\Controllers\PostController@edit');
Route::post('/posts/{post}', '\App\Http\Controllers\PostController@update');
// 编辑文章
Route::get('/posts/delete', '\App\Http\Controllers\PostController@delete');