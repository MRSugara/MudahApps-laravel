<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aplikasiController;
use App\Http\Controllers\userController;
use App\Http\Controllers\DashboardAplikasiController;
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
    return view('dashboard.dashboard', [
        'active' => 'aplikasi'
    ]);
});
// Route::get('/users', function () {
//     return view('user.dashboard.index', [
//         'active' => 'user'
//     ]);
// });
Route::get('/laporan', function () {
    return view('dashboard.laporan', [
        'active' => 'laporan'
    ]);
});

Route::get('/', [aplikasiController::class, 'index'])->name('aplikasi.index');
Route::get('/create', [aplikasiController::class, 'create'])->name('aplikasi.create');
Route::post('/', [aplikasiController::class, 'store'])->name('aplikasi.store');
Route::get('show/{id}', [aplikasiController::class, 'show'])->name('aplikasi.show');
Route::get('/edit/{id}', [aplikasiController::class, 'edit'])->name('aplikasi.edit');
Route::put('/{id}', [aplikasiController::class, 'update'])->name('aplikasi.update');

// Route::delete('/{id}', [aplikasiController::class, 'destroy'])->name('aplikasi.destroy');
Route::get('/delete/{id}', [aplikasiController::class, 'destroy'])->name('aplikasi.destroy');

Route::get('/userr', [userController::class, 'index'])->name('user.index');
Route::get('/userr/{id}', [userController::class, 'show'])->name('user.show');



// Route::resource('/user', DashboardAplikasiController::class);
