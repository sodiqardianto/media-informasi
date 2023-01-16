<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Guru;
use App\Models\Kategori;
use App\Models\Pesan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // get total berita
        $totalBerita = Berita::count();
        $totalPesan = Pesan::count();
        $totalGuru = Guru::count();
        $totalKategori = Kategori::count();
        return view('dashboard', compact('totalBerita', 'totalPesan', 'totalGuru', 'totalKategori'));
    }
}
