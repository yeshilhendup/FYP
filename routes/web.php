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
Auth::routes();

Route::post('/register_LH','AdminController@register_LH')->name('register_LH');

Route::get('/', function () {
    return view('Home');
});
Route::get('/admin-home', function () {
    return view('admin-home');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/download', function () {
    return view('download');
});
Route::get('/vacancy-announcement', function () {
    return view('vacancy-announcement');
});
Route::get('/tender-announcement', function () {
    return view('tender-announcement');
});
Route::get('/training-announcement', function () {
    return view('training-announcement');
});
Route::get('/general-announcement', function () {
    return view('general-announcement');
});
Route::get('/application', function () {
    return view('application');
});

Route::get('/HoI-login', function () {
    return view('HoI-login');
});
Route::get('/police-login',function(){
    return view('police-login');
});

Route::get('/licensee-login', function () {
    return view('licensee-login');
});
Route::get('/infringement', function () {
    return view('infringement');
});
Route::get('/licensee', function () {
    return view('licensee');
});
Route::get('/bin', function () {
    return view('BIN');
});
Route::get('/bar', function () {
    return view('barinfringe');
});

Route::get('/ein', function () {
    return view('EIN');
});

Route::get('/license-holder', function () {
    return view('license-holder');
});

Route::get('/create-provider', function () {
    return view('create-provider');
});

Route::get('/applicant', function () {
    return view('applicant');
});
Route::get('/infringement-provider', function () {
    return view('infringement-provider');
});

Route::get('/admin-login', function () {
    return view('admin-login');
});

Route::get('/add-LH', function () {
    return view('add-LH');
});

