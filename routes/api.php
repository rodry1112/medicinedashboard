<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
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

Route::get('/medicine',[MedicineController::class,'listMedicine']);

Route::get('/medicine/buscar/{medicina}',[MedicineController::class, 'searchmedicine']);

Route::post('/medicine/save',[MedicineController::class, 'savemedicine']);
Route::put('/medicine/update/{medicina}',[MedicineController::class, 'updatemedicine']);
Route::delete('/medicine/deleted/{medicina}',[MedicineController::class, 'deletedmedicine']);