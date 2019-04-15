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

Route::get('index','WeixinController@index');//第一次get请求
/*
 * 接受微信的推送事件 post   推送事件 关注 取消关注 ...
 */
Route::post('index','WeixinController@wxEven');
/*
 * 创建微信工众号菜单  post
 */
Route::any('menu','WeixinController@menu');