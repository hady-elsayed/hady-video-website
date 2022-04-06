<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
})->name('frontend.landing');


Route::namespace('BackEnd')->prefix('admin')->group(function (){

    Route::get('/home','Home@index');


//  all routes for user
//    Route::get('users','Users@index');
//    Route::get('users/create','Users@create');
//    Route::post('users','Users@store');
//    Route::get('users/{id}','Users@edit');
//    Route::post('users/{id}','Users@store');
//    route recourse
    Route::resource('users','Users')->except(['show']);
    Route::resource('categories','CategoryController');
    Route::resource('skills','SkillController');
    Route::resource('videos','VideoController');



});

Route::get('category/{id}','HomeController@category')->name('front.category');
Route::get('skill/{id}','HomeController@skill')->name('front.skill');
Route::get('video/{id}','HomeController@video')->name('front.video');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

