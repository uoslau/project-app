<?php

use App\Models\Kegiatan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenugasanController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page'
    ]);
});

Route::get('/penugasan', [PenugasanController::class, 'index']);

Route::get('/penugasan/{penugasan:slug}', [PenugasanController::class, 'show']);

Route::get('/kegiatan', function () {
    return view('kegiatan', [
        'title' => 'Rekap Kegiatan',
        'kegiatan' => Kegiatan::all()
    ]);
});

Route::get('/kegiatan/{kegiatan:slug}', function (Kegiatan $kegiatan) {
    return view('detail-kegiatan', [
        'title' => $kegiatan->nama_kegiatan,
        'penugasans' => $kegiatan->penugasan,
        'kegiatan' => $kegiatan->nama_kegiatan
    ]);
});
