<?php

use App\Http\Controllers\ProfileController;
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





Route::middleware(['is_admin', 'auth'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });

    Route::resource('admin/stadions', \App\Http\Controllers\StadionController::class);
    Route::resource('admin/users', \App\Http\Controllers\UserController::class);
});

Route::middleware(['is_stadion', 'auth'])->group(function () {
    Route::get('/stadion', function () {
        return view('stadion.index');
    });

//    Route::resource('admin/stadions', \App\Http\Controllers\StadionController::class);
});






Route::get('/dashboard', function () {
    if (auth()->user()->is_admin == 1){
        return redirect("/admin");
    }
    if (auth()->user()->is_admin == 2) {
        return redirect("/stadion");
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
