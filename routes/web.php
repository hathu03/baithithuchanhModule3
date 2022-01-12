<?php

use App\Http\Controllers\StaffController;
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
Route::prefix('staffs')->group(function (){
    Route::get('/', [StaffController::class, 'index'])->name('staffs.index');
    Route::get('/create', [StaffController::class, 'create'])->name('staffs.create');
    Route::post('/create', [StaffController::class, 'store'])->name('staffs.store');
    Route::post('/{id}/update', [StaffController::class, 'update'])->name('staffs.update');
    Route::get('/{id}/update', [StaffController::class, 'edit'])->name('staffs.edit');
    Route::get('/{id}/delete', [StaffController::class, 'destroy'])->name('staffs.delete');
    Route::get('/search', [StaffController::class, 'search'])->name('staffs.search');
});
