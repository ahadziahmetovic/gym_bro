<?php

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Protected routes using 'auth:api' middleware
Route::middleware('auth:api')->group(function () {
    Route::get('/employee', function (Request $request) {
        return $request->user();  // Assuming you meant to return the authenticated user
    });

    Route::get('/members', function (Request $request) {
        return $request->user()->members(); // Adjust this based on your relationships
    });
});

// Public routes
Route::post('/login', function (Request $request) {
   $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $member = Member::where('email', $request->email)->first();

    if ($member && Hash::check($request->password, $member->password)) {
        $token = $member->createToken('Gym')->accessToken;
        return response()->json(['token' => $token], 200);
    }

    return response()->json(['error' => 'Unauthenticated'], 401);
});

// Public route to check API status
Route::get('/check', function () {
    return response()->json(['status' => 'OK'], 200);
});

// Example of using 'auth:sanctum' middleware for user route
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
