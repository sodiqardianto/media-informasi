<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class BeritaController extends Controller
{
    public function data()
    {
        $berita = Berita::with('kategori', 'user')->get();
        return DataTables::of($berita)
            ->addIndexColumn()
            ->addColumn('action', function ($berita) {
                $delete = '<button data-id="' . $berita->id . '" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> Delete</button>';
                $edit = '<a href="' . route('berita.edit', $berita->id) . '" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i> Ubah</a>';
                return $edit . ' ' . $delete;
            })
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('berita.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // show foreach
        $kategori = Kategori::all();
        return view('berita.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_berita' => 'required',
            'kategori' => 'required',
            'berita' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'judul_berita.required' => 'Judul Berita Wajib Diisi',
            'kategori.required' => 'Kategori Wajib Dipilih',
            'berita.required' => 'Berita Wajib Diisi',
            'gambar.required' => 'Gambar Wajib Diisi',
            'gambar.image' => 'File Yang Diupload Bukan Gambar',
            'gambar.max' => 'Ukuran File Maksimal 2 mb',
        ]);

        $data = Berita::create([
            'idkategori' => $request->kategori,
            'iduser' => Auth::user()->id,
            'judul_berita' => $request->judul_berita,
            'berita' => $request->berita,
        ]);

        $file = $request->file('gambar');
        $nama_file = time() . "." . $file->getClientOriginalExtension();
        $file->move(public_path('images/berita'), $nama_file);
        $data->gambar = $nama_file;
        $data->save();

        if ($data) {
            return redirect()->route('berita.index')->with('success', 'Berita Berhasil Ditambahkan');
        } else {
            return redirect()->route('berita.index')->with('error', 'Berita Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        $kategori = Kategori::all();
        return view('berita.edit', compact('berita', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_berita' => 'required',
            'kategori' => 'required',
            'berita' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'judul_berita.required' => 'Judul Berita Wajib Diisi',
            'kategori.required' => 'Kategori Wajib Dipilih',
            'berita.required' => 'Berita Wajib Diisi',
            'gambar.image' => 'File Yang Diupload Bukan Gambar',
            'gambar.max' => 'Ukuran File Maksimal 2 mb',
        ]);

        $data = Berita::find($id);
        $data->idkategori = $request->kategori;
        $data->iduser = Auth::user()->id;
        $data->judul_berita = $request->judul_berita;
        $data->berita = $request->berita;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('images/berita'), $nama_file);
            $data->gambar = $nama_file;
        }

        $data->save();

        if ($data) {
            return redirect()->route('berita.index')->with('success', 'Berita Berhasil Diubah');
        } else {
            return redirect()->route('berita.index')->with('error', 'Berita Gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
