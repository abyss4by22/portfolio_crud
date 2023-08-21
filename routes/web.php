<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NameController;
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

Route::get("/",[FrontendController::class,"index"])->name("frontend.index");
Route::get("/backend",[BackendController::class,"index"])->name("backend.index");

//route for name


//route for edit roles
Route::get("/roles/edit",[BackendController::class,"roles"])->name("roles.edit");