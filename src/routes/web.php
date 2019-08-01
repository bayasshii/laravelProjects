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


// ログイン機能
Route::get('github', 'Github\GithubController@top');
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
Route::post('user', 'User\UserController@updateUser');

// 投稿機能
Route::get('github', 'Github\GithubController@index');
Route::post('github', 'Github\GithubController@createAlbum');
Route::post('github', 'Github\GithubController@upload');
// 画像アップロード
Route::post('github', 'Github\GithubController@upload');