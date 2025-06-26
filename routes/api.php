<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'contact'], function () {
    // List all contacts
    Route::get('/', [ContactController::class, 'index'])->name('admin.contact.index');

    // Create new contact
    Route::get('/create', [ContactController::class, 'create'])->name('admin.contact.create');
    Route::post('/store', [ContactController::class, 'store'])->name('admin.contact.store');

    // Contact management routes (edit, update, delete) 
    Route::group(['prefix' => '{contact}'], function () {
        Route::get('/edit', [ContactController::class, 'edit'])->name('admin.contact.edit');
        Route::post('/update', [ContactController::class, 'update'])->name('admin.contact.update');
        Route::get('/delete', [ContactController::class, 'delete'])->name('admin.contact.delete'); 
    });
});