<?php

use App\Http\Controllers\FeeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\HomeController;
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
Route::group([
  
    'excluded_middleware' => ['auth'],
  ], function () {
    
    Route::post('/create', [MemberController::class, 'create'])->name('create');
    Route::post('/test', [HomeController::class, 'test'])->name('test');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/izvjestaj', [HomeController::class, 'izvjestaj'])->name('izvjestaj');
    Route::get('/memberProfile', [MemberController::class, 'profile'])->name('profile');
    Route::get('/createMember', [MemberController::class, 'index'])->name('createMember');
    Route::get('/createFee', [FeeController::class, 'index'])->name('createFee');
    Route::get('/members', [MemberController::class, 'members'])->name('members');
    Route::get('/attendance', [MemberController::class, 'attendance'])->name('attendance');
    Route::post('/slanje', [MemberController::class, 'slanje'])->name('slanje');
  });
  
Auth::routes();





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
