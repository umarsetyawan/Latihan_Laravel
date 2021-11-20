<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\UserController;
use App\Models\Inventory;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/home', function() {
    return view('home', ["title" => "home"]);
});

Route::get('profile', [UserController::class, 'Index']);

Route::get('profile/{link}', [UserController::class, 'show']);

Route::get('/inventory', [InventoryController::class, 'Index']);



Route::get('/inventory/{link}', [InventoryController::class, 'show']);