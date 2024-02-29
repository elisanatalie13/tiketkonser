<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ListTiketController;

// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
// return view('list_barang', compact('id', 'nama'));
// });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/tiket', [ListTiketController::class, 'index']);