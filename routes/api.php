<?php

use App\Http\Controllers\FormController;
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


// Route::get('/view', function(Request $request) {
//     return view('Form.viewForm');
// });

// Route::get('/formList', function(Request $request) {
//     return view('Form.formList');
// });

Route::get('/view', function(Request $request) {
        return view('Form.viewForm');
    });
Route::get('/form',[FormController::class,'index']);
//Post para ingresar registros a la base de datos
Route::post('/formPost',[FormController::class,'store']);
Route::put('/form/{id}',[FormController::class,'update']);
Route::delete('/form/{id}',[FormController::class,'destroy']);