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
/*
Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    $nama = 'Muhammad Iqbal Tawakkal Nur';
    return view('about',['nama'=> $nama]);
});
*/
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa','MahasiswaController@index');


//Students
Route::get('/students','StudentsController@index');

Route::get('/students/create','StudentsController@create');  

Route::get('/students/{student}','StudentsController@show');  
Route::post('/students','StudentsController@store');
Route::delete('students/{students}','StudentsController@destroy');


/*
Route::get('halo',function(){
    return "Halo,Selamat datang di Website Rekayasa Iqbal";
});
Route::get('/blog',function(){
     return view('blog');
});

Route::get('dosen','DosenController@index');

Route::get('/pegawai/{nama}', 'PegawaiController@index');

Route::get('formulir','PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');
*/

//contact
Route::get('contact','ContactController@index');
Route::get('contact/create','ContactController@create');
Route::get('contact/{contact}','ContactController@show');
Route::post('/contact','ContactController@store');
Route::delete('contact/{contact}','ContactController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('student');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
