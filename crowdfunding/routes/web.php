<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HowitworksController;
use App\Http\Controllers\Frontend\ProjectsController;
use App\Http\Controllers\Frontend\WhatwedoController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\DonateController;
use App\Http\Controllers\Frontend\FundraiserController;
use App\Http\Controllers\Frontend\LinksController;

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
    // return view('welcome');
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/home1', 'App\Http\Controllers\AdminHomeController@index')->name('home1');
// Route::get('/next', 'App\Http\Controllers\NextController@index')->name('next');

Route::get('/index', [App\Http\Controllers\Frontend\IndexController::class, 'index'])->name('index');
Route::get('/aboutus', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');
Route::get('/howitworks', [App\Http\Controllers\Frontend\HowitworksController::class, 'index'])->name('howitworks');
Route::get('/projects', [App\Http\Controllers\Frontend\ProjectsController::class, 'index'])->name('projects');
Route::get('/whatwedo', [App\Http\Controllers\Frontend\WhatwedoController::class, 'index'])->name('whatwedo');
Route::get('/donate', [App\Http\Controllers\Frontend\DonateController::class, 'index'])->name('donate');
Route::get('/dashboard', [App\Http\Controllers\Frontend\DashboardController::class, 'index'])->name('dashboard');

Route::get('/careers', [App\Http\Controllers\Frontend\LinksController::class, 'f1'])->name('careers');
Route::get('/commonquestions', [App\Http\Controllers\Frontend\LinksController::class, 'f2'])->name('commonquestions');
Route::get('/countriessupported', [App\Http\Controllers\Frontend\LinksController::class, 'f3'])->name('countriessupported');
Route::get('/education', [App\Http\Controllers\Frontend\LinksController::class, 'f4'])->name('education');
Route::get('/emergency', [App\Http\Controllers\Frontend\LinksController::class, 'f5'])->name('emergency');
Route::get('/helpcenter', [App\Http\Controllers\Frontend\LinksController::class, 'f6'])->name('helpcenter');
Route::get('/medical', [App\Http\Controllers\Frontend\LinksController::class, 'f7'])->name('medical');
Route::get('/memorial', [App\Http\Controllers\Frontend\LinksController::class, 'f8'])->name('memorial');
Route::get('/successstories', [App\Http\Controllers\Frontend\LinksController::class, 'f9'])->name('successstories');
Route::get('/whyfoc', [App\Http\Controllers\Frontend\LinksController::class, 'f10'])->name('whyfoc');

Route::get('/donated',[App\Http\Controllers\DonateController::class, 'create'])->name('donated');

Route::get('/fundraiser', [App\Http\Controllers\Frontend\FundraiserController::class, 'create'])->name('fundraiser');
Route::get('/fundraiserRead', [App\Http\Controllers\Frontend\FundraiserController::class, 'read'])->name('fundraiserRead');
Route::get('/fundraiserUpdate', [App\Http\Controllers\Frontend\FundraiserController::class, 'edit'])->name('fundraiserUpdate');

// Route::get('/index', 'App\Http\Controllers\IndexController@read')->name('frontend.index');

// Route::get('/next', [App\Http\Controllers\NextController::class, 'index'])->name('next');

Route::get('auth/{provider}', 'App\Http\Controllers\FacebookLoginController@redirectFacebook');
Route::get('callback/{provider}', 'App\Http\Controllers\FacebookLoginController@runCallback');

Route::get('auth/{provider}', 'App\Http\Controllers\GoogleLoginController@redirectGoogle');
Route::get('callback/{provider}', 'App\Http\Controllers\GoogleLoginController@runCallback');

Route::get('/admin/login', 'App\Http\Controllers\Admin\Auth\LoginController@create')->name('admin.login');

// Route::post('/admin/login', 'App\Http\Controllers\Admin\Auth\LoginController@store')->name('admin.storelogin');

// Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
//     Route::namespace('Auth')->group(function(){
//         Route::get('login', 'LoginController@__construct')->name('login');
//     });
// });

Route::get('fundraiser/create', 'App\Http\Controllers\Frontend\FundraiserController@create')->name('fundraiser.create');

Route::post('fundraiser/store', 'App\Http\Controllers\Frontend\FundraiserController@store')->name('fundraiser.store');

Route::get('fundraiser/read', 'App\Http\Controllers\Frontend\FundraiserController@read')->name('fundraiser.read');

Route::get('fundraiser/edit/{cnic}', 'App\Http\Controllers\Frontend\FundraiserController@edit')->name('fundraiser.edit');

Route::post('fundraiser/update/{cnic}', 'App\Http\Controllers\Frontend\FundraiserController@update')->name('fundraiser.update');

Route::get('fundraiser/delete/{cnic}', 'App\Http\Controllers\Frontend\FundraiserController@delete')->name('fundraiser.delete');