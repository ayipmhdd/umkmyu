<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;

/*
|--------------------------------------------------------------------------
| Public Route
|--------------------------------------------------------------------------
*/
// Route::get('/', function () {
//     return view('mainpage/index');
// });

Route::get('/', [UmkmController::class, 'homepage']);


// Route resource untuk halaman user
Route::resource('umkm', UmkmController::class);

// Route::get('/direktori-umkm', [UmkmController::class, 'direktori'])
//     ->name('direktori.umkm');
Route::get('/umkm/{id}', [UmkmController::class, 'show'])->name('umkm.show');

Route::get('/search', function() {
    return view('mainpage.section-page.search-page');
})->name('search');



/*
|--------------------------------------------------------------------------
| Admin Route
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');

    Route::get('/umkm/create', [UmkmController::class, 'create'])->name('admin.umkm.create');
    Route::post('/umkm', [UmkmController::class, 'store'])->name('admin.umkm.store');
    Route::get('/umkm/{id}/edit', [UmkmController::class, 'edit'])->name('admin.umkm.edit');
    Route::put('/umkm/{id}', [UmkmController::class, 'update'])->name('admin.umkm.update');
    Route::delete('/umkm/{id}', [UmkmController::class, 'destroy'])->name('admin.umkm.destroy');

    Route::resource('umkm', UmkmController::class)->names('admin.umkm');

});


