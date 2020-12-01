<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::Resource('opinions',OpinionController::class);
Route::Resource('references',ReferenceController::class);
Route::Resource('roles',RoleController::class);
Route::Resource('states',StateController::class);
Route::Resource('themes',ThemeController::class);
