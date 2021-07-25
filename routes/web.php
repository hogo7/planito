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


Route::get('admin10101/userlist/{page?}'  ,'AdminController@userList')  ->name('userlist');
Route::get('admin10101/chart/{userId?}'   ,'AdminController@chart')     ->name('chartAdmin');
Route::get('admin10101/adminlist/{page?}' ,'AdminController@adminList') ->name('adminlist');
Route::get('/admin10101'                  ,'AdminController@authGet')   ->name('authGet');
Route::get('/admin10101/index'            ,'AdminController@index')     ->name('adminIndex');
Route::post('/admin10101'                 ,'AdminController@authPost')  ->name('authPost');



Route::get('/index', 'PagesController@index')->name('index');
Route::get('/',function(){
   return redirect('index');
   });
   
Route::get('/blog', function () {
   return  view('pages.inConst');
})->name('blog');
Route::get('/appo', function (
) {
    return  view('pages.inConst');
 })->name('appo');

Route::get('/pdf','HomeController@pdf');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/chart', 'HomeController@Chart')->name('chart');

Route::get('/mbti/{task}/{page?}','TestsController@mbti')->name('mbti');

Route::post('/mbti/create/','mbtiController@create')->name('mbtipost');

Route::get('/tasks/{task}/{page?}','TestsController@tasks')->name('task');

Route::post('/tasks/create','tasksController@create')->name('taskPost');

Route::get('/register','registerController@index')->name('register');

Route::post('/register','registerController@create')->name('registerPost');

Route::get('/login','sessionController@index')->name('login');

Route::post('/login','sessionController@createSession')->name('loginPost');

Route::post('/logout','sessionController@deleteSession')->name('logout');

