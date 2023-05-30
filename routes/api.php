<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/mahasiswa', MahasiswaController::class);
    Route::get('/logout', [ApiAuthController::class, 'logout']);
});

Route::post('/login', [ApiAuthController::class, 'login']);

Route::post('/register', [ApiAuthController::class, 'register']);

Route::get('/hello', function(){
    // $data = ["message"=>"hello world"];
    return 'hello world';
});

// Route::apiResource('/mahasiswa', MahasiswaController::class);