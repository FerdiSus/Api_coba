<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::prefix('/buku')->group(function(){
    Route::get('/', [BukuController::class,'index']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('/update',[BukuController::class,'update']);
    Route::delete('/delete',[BukuController::class,'delete']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
