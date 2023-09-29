<?php

use App\Http\Controllers\UserController;
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

// Admin routes

// ADMIN
// GET 
Route::get('admin/allUsers', [UserController::class, 'allUsers'])->name('admin.allUsers');
Route::get('admin/addNewAdministrator', [UserController::class, 'addNewAdministrator'])->name('admin.addNewAdministrator');

// POST
Route::post('admin/createAdministrator', [UserController::class, 'createAdministrator'])->name('admin.createAdministrator');