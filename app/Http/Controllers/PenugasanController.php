<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penugasan;

class PenugasanController extends Controller
{
    public function index()
    {
        return view('penugasan', [
            'title' => 'Rekap Penugasan',
            'penugasans' => Penugasan::latest()->get()
        ]);
    }

    public function show(Penugasan $penugasan)
    {
        return view('detail-penugasan', [
            'title' => 'Detail Penugasan',
            'penugasan' => $penugasan
        ]);
    }
}
