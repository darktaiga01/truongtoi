<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/reviewshool', function () {
    return view('reviewshool');
})->name('reviewshool');
Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/discuss', function () {
    return view('discuss');
})->name('discuss');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/user/dashboard','UserController@index')->name('user.dashboard');

Route::prefix('admin')->group(function() {
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');
});

// Route::get('/admin/posts',                 'PostController@index');
Route::get('/university/{university}', 'UniversityController@show')->name('university.show');
// Route::get('/admin/posts/create',          'PostController@create');
// Route::get('/admin/posts/{resource}/edit', 'PostController@edit');
// Route::post('/admin/posts',                'PostController@store');
// Route::put('/admin/posts/{post}',      'PostController@update');
// Route::delete('/admin/posts/{post}',   'PostController@destroy');
// Route::resource('posts', 'PostController');

Route::resource('admin/university', 'UniversityController')->except('show');

Route::get('search', 'SearchController@search')->name('search');
Route::get('advancedSearch','SearchController@advancedSearch')->name('advancedSearch');
Route::resource('admin/category', 'CategoryController');


Route::get('/post/{post}', 'PostController@show')->name('posts.show');
Route::resource('admin/posts', 'PostController')->except('show');

Route::get('/major/{id}', 'HomeController@showMajorList')->name('majorShow');