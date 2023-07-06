<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\backendController;
Route::get('/logout', [backendController::class,'logout'])->name('logout');
//categories
use App\Http\Controllers\CategoryController;
Route::get('/categories', [CategoryController::class,'index'])->name('categories');
Route::post('/categories/store',[CategoryController::class , 'store'])->name('categories.store');

Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('categories.edit');
Route::post('/category/update/{id}',[CategoryController::class , 'update'])->name('categories.update');
// Route::get('/category/delete/{id}', [CategoryController::class,'destroy'])->name('categories.destroy');
Route::get('/category/softDelete/{id}', [CategoryController::class,'softDelete'])->name('categories.softDelete');
Route::get('/category/deleted', [CategoryController::class,'deletedCategory'])->name('categories.deletedCategory');

Route::get('/category/restore/{id}', [CategoryController::class,'restore'])->name('categories.restore');
Route::get('/category/hardDelete/{id}', [CategoryController::class,'hardDelete'])->name('categories.hardDelete');

//brands
use App\Http\Controllers\BrandController;
Route::get('/brands', [BrandController::class,'index'])->name('brands');
Route::post('/brands/store',[BrandController::class , 'store'])->name('brands.store');









Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::get('/users', function () {
        $users = User::all();
        return view('admin.users',compact('users'));
    })->name('users');


});
