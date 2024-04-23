<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserSettingsController;

use App\Http\Controllers\RegionalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomLogoutController;
use App\Models\Egresado;
use App\Models\Regional;
use App\Models\Centro;
use App\Http\Controllers\EgresadoController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\postadmincontroller;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\tagController;
use App\Models\Post;
use Maatwebsite\Excel\Row;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('lading.index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/NewPassword',  [UserSettingsController::class,'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password',  [UserSettingsController::class,'changePassword'])->name('changePassword');

Route::get('/registerss', function () {
    return view('register');
});

Auth::routes();

Route::get('/logout', [CustomLogoutController::class, 'logout'])->name('custom.logout');

Route::resource('/import', ImportController::class)->only(['index', 'create', 'store']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/egresado', EgresadoController::class);
Route::resource('/regional', RegionalController::class);
Route::resource('/centro', CentroController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/tags', tagController::class);
Route::resource('/post', postadmincontroller::class);
Route::put('/egresado/{egresado}', [EgresadoController::class, 'update'])->name('egresado.update');
Route::resource('/regional', RegionalController::class)->except(['update']);
Route::put('/regional/{regional}', [RegionalController::class, 'update'])->name('regional.update');
Route::delete('/egresado/{egresado}', [EgresadoController::class, 'destroy'])->name('egresado.destroy');
Route::get('/posts', [Postcontroller::class,'index'])->name('posts.index');
Route::get('category/{category}', [Postcontroller::class,'category'])->name('posts.category');
Route::get('tag/{tag}', [Postcontroller::class,'tag'])->name('posts.tag');
Route::post('/posts', [postadmincontroller::class, 'store'])->name('posts.store');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('posts/{post}',[Postcontroller::class, 'show'])->name('posts.show');