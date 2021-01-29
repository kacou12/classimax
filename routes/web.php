<?php

use App\Http\Controllers\AdsController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

/**
 * Route testing Classimax
 */

//Route::get('login', function () {
//    return view('classimax.login');
//});
//
//
//Route::get('register', function () {
//    return view('classimax.register');
//});


Route::get('home', fn ()=> view('classimax.auth.dashboard'))->middleware('auth')->name('home');

Route::get('logout', function(){
    Auth::logout();
    return redirect()->back();
})->middleware('auth');


Route::resource('Ads', AdsController::class)->middleware('auth');

Route::get('/login-form', fn() => view('livewire_login_form'))->name('livewire-login');
Route::get('/register-form', fn()=>view("livewire_register"));