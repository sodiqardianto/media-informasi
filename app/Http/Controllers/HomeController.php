<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Guru;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $recentGuru = Guru::orderBy('created_at', 'DESC')->limit(3)->get();
        $recentPosts = Berita::with('kategori')->orderBy('created_at', 'DESC')->limit(4)->get();
        return view('front_office.home', compact('recentGuru', 'recentPosts'));
    }

    public function show()
    {
        $guru = Guru::latest()->filter(request(['search']))->get();
        return view('front_office.our-teacher', compact('guru'));
    }

    public function showBerita()
    {
        $berita = Berita::with('kategori')->latest()->filter(request(['search']))->get();
        return view('front_office.our-post', compact('berita'));
    }

    public function detailBerita($id)
    {
        $berita = Berita::with('kategori', 'user')->find($id);
        $kategori = Kategori::all();
        $recentPosts = Berita::with('kategori')->orderBy('created_at', 'DESC')->limit(4)->get();
        return view('front_office.detail-post', compact('berita', 'kategori', 'recentPosts'));
    }

    public function visiMisi()
    {
        return view('front_office.visi-misi');
    }

    public function showPage($id)
    {
        $berita = Berita::where('idkategori', $id)->get();
        $namaKategori = Kategori::find($id);
        return view('front_office.page', compact('berita', 'namaKategori'));
    }
}
