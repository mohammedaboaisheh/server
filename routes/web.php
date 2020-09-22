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

Route::get('/', 'AboutController@showhome');
Route::get('Contact-Us', function () {
    return view('Contact-Us');
});
Route::post('Contact-Us', 'ContactController@saveContact');
Route::get('About-Us', 'AboutController@show');
Route::get('Home', 'AboutController@showhome');
Route::get('Courses', 'CourseController@show');
Route::get('Magazine', 'MagazineController@show');
Route::get('issue/{id}', 'MagazineController@showissue');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
