<?php

use App\Http\Controllers\Api\HumanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource('humans', HumanController::class);
/*Route::group(
    ["namespace"=>"App\Http\Controllers\Api"],
    function(){

    Route::apiResource('people', HumanController::class);

    }
);*/

Route::get('/Wojciechowski/313079/people',[HumanController::class, 'index']);
Route::get('/Wojciechowski/313079/people/{human}', [HumanController::class, 'show']);
Route::delete('/Wojciechowski/313079/people/{human}', [HumanController::class, 'destroy']);
Route::post('/Wojciechowski/313079/people/{human}', [HumanController::class, 'store']);
Route::put('/Wojciechowski/313079/people/{human}', [HumanController::class, 'update']);
