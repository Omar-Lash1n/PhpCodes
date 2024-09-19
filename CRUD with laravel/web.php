<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\RegestrationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\postController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/home/welcome', [HomePageController::class, 'homepage']);
Route::get('/register/form', [RegestrationController::class, 'Register']);

//Customer Controller
Route::get('/customer/tableview', [CustomerController::class, 'showData']);
Route::get('/customer/form', [CustomerController::class, 'openPage']);
Route::post('/customer/register', [CustomerController::class, 'insertData']);

//Post Controller Routes
Route::get('/posts/form', [postController::class, 'displayForm']);
Route::post('/posts/creation', [postController::class, 'insertData']);
Route::get('/posts/table', [postController::class, 'showData']);
Route::get('/posts/edit/{id}', [postController::class, 'edit']);
Route::put('/posts/update/{id}', [postController::class, 'update']);
Route::get('/post/delete/{id}', [postController::class, 'delete']);
