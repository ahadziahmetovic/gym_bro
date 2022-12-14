<?php

use App\Http\Controllers\MemberController;
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
    
    Route::post('/upload', [MemberController::class, 'upload'])->name('upload');
    Route::post('/test', [HomeController::class, 'test'])->name('test');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/createMember', [MemberController::class, 'index'])->name('createMember');

  
  });
  
Auth::routes();




