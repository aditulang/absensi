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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'master-data'], function (){
    Route::get('/siswa', 'SiswaController@index')->name('master-data.siswa');
});

Route::get('login/github','GithubController@redirectToProvider');
Route::get('login/github/callback','GithubController@handleProviderCallback');



Route::group(['prefix' => 'manage'], function(){
    //user
    route::get('/user','Manage\UserController@index')->name('manage.user');
    route::get('/add/form/invite','Manage\UserController@create')->name('manage.add.form.invite');
    //lesson
    route::get('/lessons','Manage\LessonController@index')->name('manage.lessons');
    route::get('/add/form/lesson','Manage\LessonController@create')->name('manage.add.form.lesson');
    //class
    route::get('/class','Manage\ClassController@index')->name('manage.class');
    route::get('/add/form/class','Manage\ClassController@create')->name('manage.add.form.class');
});


Route::group(['prefix' => 'store'], function(){
    route::post('lesson','Manage\LessonController@store')->name('store.lesson');
    route::post('class','Manage\ClassController@store')->name('store.class');
    route::post('user','Manage\UserController@store')->name('store.user');
});

Route::group(['prefix' => 'edit'], function () {
    route::get('lesson/{lesson}', 'Manage\LessonController@edit')->name('edit.lesson');
    route::get('class/{class}', 'Manage\ClassController@edit')->name('edit.class');
});

Route::group(['prefix' => 'update'], function () {
    route::patch('lesson/{lesson}', 'Manage\LessonController@update')->name('update.lesson');
    route::patch('class/{class}', 'Manage\ClassController@update')->name('update.class');
});

Route::group(['prefix' => 'destroy'], function () {
    route::delete('lesson/{lesson}', 'Manage\LessonController@destroy')->name('destroy.lesson');
});
