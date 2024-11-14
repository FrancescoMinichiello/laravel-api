<?php

use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix("/admin")->name("admin.")->group(function () {
    Route::get('/projects', [AdminProjectController::class, "index"])->name('index');
    Route::get('/projects/show/{project}', [AdminProjectController::class, "show"])->name('show');
    Route::get('/projects/create', [AdminProjectController::class, "create"])->name('create');
    Route::post('/projects/store', [AdminProjectController::class, "store"])->name('store');
    Route::delete('/projects/{project}', [AdminProjectController::class, 'destroy'])->name('destroy');
});
