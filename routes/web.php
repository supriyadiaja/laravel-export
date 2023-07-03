<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


Route::get('/', function () {
    return view('welcome');
});

// route Read data
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');

// route Created data
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
Route::post('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata');

// route Update data
Route::get('/tampildata/{id}', [MahasiswaController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}', [MahasiswaController::class, 'updatedata'])->name('updatedata');

// route Deleted data
Route::get('/deletedata/{id}', [MahasiswaController::class, 'deletedata'])->name('deletedata');

// detail data
Route::get('//detaildata/{id}', [MahasiswaController::class, 'detaildata'])->name('detaildata');

// export pdf
Route::get('/exportpdf', [MahasiswaController::class, 'exportpdf'])->name('exportpdf');

// export exel
Route::get('/exportexcel', [MahasiswaController::class, 'exportexcel'])->name('exportexcel');

// import data
Route::post('/importdata', [MahasiswaController::class, 'importdata'])->name('importdata');
