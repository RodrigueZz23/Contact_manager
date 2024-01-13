<?php

use App\Http\Controllers\ContactManagerController;
use App\Models\contact_manager;
use App\Http\Controllers\ShowController;
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

Route::get('/form_manager', function () {
    return view('form_manager');
});



Route::get('show', [ShowController::class, 'show']);
Route::get('delete/{id}', [ShowController::class, 'delete']);
Route::get('edit/{id}', [ShowController::class, 'showData']);
Route::post('edit', [ShowController::class, 'update']);



Route::post('/form_manager', [ContactManagerController::class, 'contact_managerPost'])->name('contact_manager');
