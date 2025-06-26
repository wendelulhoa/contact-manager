<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
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

// Redirect to login
Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Contact routes
    Route::group(['prefix' => 'contact'], function () {
        // List all contacts
        Route::get('/', [ContactController::class, 'index'])->name('admin.contact.index');
    
        // Create new contact
        Route::get('/create', [ContactController::class, 'create'])->name('admin.contact.create');
        Route::post('/store', [ContactController::class, 'store'])->name('admin.contact.store');

        // Get contacts by datatable
        Route::post('/getcontactsbyuserdatatable', [ContactController::class, 'getContactsByUserDatatable'])->name('admin.contact.getcontactsbyuserdatatable');
    
        // Contact management routes (edit, update, delete) 
        Route::group(['prefix' => '{contact}'], function () {
            Route::get('/edit', [ContactController::class, 'edit'])->name('admin.contact.edit');
            Route::post('/update', [ContactController::class, 'update'])->name('admin.contact.update');
            Route::delete('/delete', [ContactController::class, 'delete'])->name('admin.contact.delete'); 
        });
    });
});

require __DIR__.'/auth.php';