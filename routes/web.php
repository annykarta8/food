<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/users', [AdminController::class, 'user']);

Route::get('/foodmenu', [AdminController::class, 'foodmenu']);

Route::get('/createview', [AdminController::class, 'createview']);

Route::get('/createchef', [AdminController::class, 'createchef']);

Route::get('/deletemenu/{id}', [AdminController::class, 'deletemenu']);

Route::post('/uploadfood', [AdminController::class, 'upload']);

Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);

Route::get('/updateview/{id}', [AdminController::class, 'updateview']);

Route::post('/update/{id}', [AdminController::class, 'update']);

Route::get('/redirects', [HomeController::class, 'redirects']);

Route::post('/reservation', [AdminController::class, 'reservation']);

Route::get('/viewreservation', [AdminController::class, 'viewreservation']);

Route::get('/viewchef', [AdminController::class, 'viewchef']);

Route::post('/uploadchef', [AdminController::class, 'uploadchef']);

Route::get('/updatechef/{id}', [AdminController::class, 'updatechef']);

Route::post('/updatefoodchef/{id}', [AdminController::class, 'updatefoodchef']);

Route::get('/deletechef/{id}', [AdminController::class, 'deletechef']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');