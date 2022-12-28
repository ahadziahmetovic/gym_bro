<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\HomeController;
use App\Models\Attendance;
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
    Route::post('/updateMember', [MemberController::class, 'updateMember'])->name('updateMember');
    Route::post('/test', [HomeController::class, 'test'])->name('test');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/izvjestaj', [HomeController::class, 'izvjestaj'])->name('izvjestaj');
    Route::get('/memberProfile', [MemberController::class, 'profile'])->name('profile');
    Route::get('/createMember', [MemberController::class, 'index'])->name('createMember');
    Route::get('/createFee/{id}', [FeeController::class, 'index'])->name('createFee');
    Route::get('/members', [MemberController::class, 'members'])->name('members');
    Route::get('/attendance', [MemberController::class, 'attendance'])->name('attendance');
    Route::get('/editMember/{id}', [MemberController::class, 'editMember'])->name('editMember');
    Route::get('/memberProfile/{id}', [MemberController::class, 'memberProfile'])->name('memberProfile');
    Route::get('/feesDelete/{id}', [FeeController::class, 'destroy'])->name('feesDelete');
    Route::get('/attendance-list', [AttendanceController::class, 'index'])->name('attendance-list');
    Route::get('/fees/{id}', [FeeController::class, 'fees'])->name('fees');
    Route::post('/slanje', [MemberController::class, 'slanje'])->name('slanje');
    Route::post('/insertFee', [FeeController::class, 'insertFee'])->name('insertFee');
  });
  
Auth::routes();





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
