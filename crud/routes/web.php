<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::get('/', [UserController::class, 'index']);
Route::get('/add', [UserController::class, 'add']);
Route::post('/storeUser', [UserController::class, 'storeUser']);
Route::get('/viewUserData/{id}', [UserController::class, 'details']);
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::post('/update/{id}', [UserController::class, 'userUpdate']);
Route::get('/delete/{id}', [UserController::class, 'delete']);