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

/*Route::get('/', function () {
    return view('home');
});*/
//addBanner route
Route::get('/admin/addBanner',function (){
    return view('admin.addBanner');
});
//insert route
Route::post('/admin/insert','BannersController@addBanner');
//home route
Route::get('/','BannersController@home');

//pages
#Route::get('/classes',function (){
 #   return view('admin.classes');
#});
route::get('/parents', function (){
    return view('admin.parents');
});
route::get('/students', function (){
    return view('admin.students');
});
route::get('/login', function (){
    return view('general.login');
});
route::get('/landing', function (){
    return view('general.landing');
});
//sign in Route
Route::post('/sign_In','BannersController@sign_In');
//admin home
route::get('/index', function (){
    return view('admin.index');
});
Route::get('/registerer', function (){
    return view ('admin.summ');
});
//student to guardian
Route::get('/guardianRegister','BannersController@studentPersonalInfo');

//guardian to student profile
Route::post('/studentsProfile','BannersController@guardianPersonalInfo');

//teacher info
Route::get('/staffProfile','BannersController@staffPersonalInfo');

//staff List
Route::get('/staff','BannersController@staffList');
Route::get('staff/{id}/view','BannersController@viewStaff');

//staff register
route::get('/staffRegister', function (){
    return view('admin.staffRegister');
});

Route::get('/classes','BannersController@classHome');

Route::post('/addClass','BannersController@addGrade');
//Route::get('/view/{id}','BannersController@viewGrade');

//student Profile Link
Route::post('/Student Profile', function (){
    return view('admin.studentProfile');
});

Route::get('/view/{id}','GradesController@course');

//subjects view
Route::get('classes/{id}/view','GradesController@course');
//Register Subject
Route::post('/class/subject','BannersController@subjects');

//NEW LOG
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
