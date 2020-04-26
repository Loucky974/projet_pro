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
    return view('auth/login');
});

Route::resource('ajaxproducts','ProductAjaxController');
Route::get('productAjax', 'ProductAjaxController@index');


Route::get('productAjax',['middleware' => 'isadmin', function () {
    return view('productAjax');
}]);

Route::get('visiteur',['middleware' => 'auth', function () {
    return view('visiteur');
}]);

Route::get('user',['middleware' => 'isuser', function () {
    return view('download');
}]);

Auth::routes(['verify'=>true]);


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index');
