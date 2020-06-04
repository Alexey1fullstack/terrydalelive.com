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

Auth::routes(['register' => false]);
Route::get('/logout', 'Auth\LoginController@logout');
// Route::post('/login', function(){
//   print_r('entered');exit;
// });


//setting
Route::get('/setting','SettingController@setting')->middleware('permissions');
Route::post('/setting/update','SettingController@storesetting');
Route::post('/setting/logo','SettingController@update_logo');

//landing page
Route::get('/',"LandingpageController@landingpage");
Route::get('/about',"LandingpageController@about");
Route::get('/admin',"SettingController@loginUser")->name('admin');
Route::post('/login',"Auth\LoginController@loginUser")->name('login');

//cars
Route::get('/index',"CardController@list")->middleware('customercheck');
Route::get('/card/index',"CardController@index")->name('new_card')->middleware('customercheck');
Route::post('/card/create',"CardController@create");
Route::post('/card/destroy',"CardController@destroy");
Route::post('/card/update',"CardController@update");
Route::post('/card/updateonlist',"CardController@update_on_list");
Route::get('/card/list',"CardController@list")->name('cardlist')->middleware('customercheck');
Route::get('/card/history',"CardController@history")->middleware('customercheck');
Route::get('/card/{cardid}/edit',"CardController@edit");
Route::get('/card/{cardid}/forever',"CardController@forever");
Route::get('/card/{cardid}/restore',"CardController@restore");
Route::post('/card/status',"CardController@change_status");
Route::post('/card/sync',"LandingpageController@sync");


Route::get('/users',"UserController@users")->middleware('permissions');
Route::post('/user/member',"UserController@member");
Route::post('/user/permission',"UserController@permission");
Route::post('/user/delete',"UserController@user_delete");

Route::get('/permission',function(){
    return view('errors.nopermission');
})->name('no-permission');

Route::get('/project/setting/','ProjectController@project_setting');

Route::get('/signup','Auth\RegisterController@index');
Route::post('/signup','Auth\RegisterController@create');

Route::resource('/account','ProfileController');
Route::post('/password/update','ProfileController@password_update');

//create a new user
Route::post('/user/new_user','CardController@create_user');









