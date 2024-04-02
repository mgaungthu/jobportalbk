<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\JobVacancyController;
use App\Http\Controllers\Api\ApplicantController;



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('guest:api')->get('/login', function () {
    return response()->json(['message' => 'Pleasae login to access']);
})->name('login');


Route::post('/login', [AuthController::class, 'login']);



// Route::get('/job-vacancies', [JobVacancyController::class,'index']);

Route::apiResource('/applicants', ApplicantController::class);



Route::group(['middleware' => 'auth:api'], function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', function () {
        return response()->json(['message' => 'This is a simple home response']);
    })->name('home');


    Route::get('/example', function () {
        return response()->json(['message' => 'This is a simple API response']);
    });

    
    // Add more routes with auth middleware if needed
});


Route::apiResource('/job-vacancies', JobVacancyController::class);
