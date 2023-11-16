<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/formList', [FormController::class, 'index'])->name('form.formList');

// Route::get('formList', function() {
// return view('Form.formList');
// });
// Route::get('/formList', [FormController::class, 'index']);
// Route::get('/view', function() {
//     return view('Form.viewForm');
//     });

// Route::post('/formPost',[FormController::class,'store']);