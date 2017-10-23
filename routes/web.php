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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index');

//Challenges

Route::get('/challenges', 'ChallengeController@index');

Route::get('/challenges/{challengechannel}/{difficulty}/{challenge}', 'ChallengeController@show');

Route::delete('/challenges/{challengechannel}/{difficulty}/{challenge}', 'ChallengeController@destroy');

Route::get('/challenges/filter/{channel}', 'ChallengeController@index');

Route::get('/challenge/filter/{difficulty}', 'ChallengeController@index');

Route::get('/challenges/create', 'ChallengeController@create');

Route::post('/challenges', 'ChallengeController@store');

Route::post('/challenges/{challengechannel}/{difficulty}/{challenge}/replies', 'ReplyController@store');

Route::get('/challenges/{challengechannel}/{difficulty}/{challenge}/replies', 'ReplyController@index');

Route::patch('/replies/{reply}', 'ReplyController@update');

Route::delete('/replies/{reply}', 'ReplyController@destroy');

Route::post('/replies/{reply}/likes', 'LikeController@store');

Route::delete('/replies/{reply}/likes', 'LikeController@destroy');




//Forum
Route::get('/forum', 'PostController@index');

Route::get('/forum/create', 'PostController@create');

Route::post('/forum', 'PostController@store');

Route::get('/forum/{channel}', 'PostController@index');

Route::get('/forum/{channel}/{post}', 'PostController@show');

Route::delete('/forum/{channel}/{post}', 'PostController@destroy');

Route::get('/forum/{channel}/{post}/edit', 'PostController@edit');

Route::put('/forum/{channel}/{post}', 'PostController@update');

Route::post('/forum/{channel}/{post}/comments', 'CommentController@store');

Route::get('/forum/{channel}/{post}/comments', 'CommentController@index');

Route::post('/forum/{channel}/{post}/comments/edit', 'CommentController@edit');

Route::patch('/comments/{comment}', 'CommentController@update');

Route::delete('/comments/{comment}', 'CommentController@destroy');

Route::post('/comments/{comment}/favorites', 'FavoriteController@store');

Route::delete('/comments/{comment}/favorites', 'FavoriteController@destroy');




//GATE
Route::get('/gatecse', 'GateController@index');

//Profile
Route::get('/profile', 'ProfileController@index');

Route::get('/@{user}', 'ProfileController@show');

Route::post('/profile', 'ProfileController@update_avatar');


//uploads
//--------------upload file nad store in database
Route::post('/challenges/{challengechannel}/{difficulty}/{challenge}/files','UploadController@storefile');

