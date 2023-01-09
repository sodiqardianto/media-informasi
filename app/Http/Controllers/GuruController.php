<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $guru = Guru::all();
        return DataTables::of($guru)
            ->addIndexColumn()
            ->addColumn('action', function ($guru) {
                if ($guru->id == 1) {
                    $delete = '<button data-id="' . $guru->id . '" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> Delete</button>';
                } else {
                    $delete = '<button data-id="' . $guru->id . '" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> Delete</button>';
                }
                $edit = '<a href="' . route('guru.edit', $guru->id) . '" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i> Ubah</a>';
                return $edit . ' ' . $delete;
            })
            ->make(true);
    }
    public function index()
    {
        return view('guru.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
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
            'namaguru' => 'required',
            'nipn' => 'required|unique:guru',
            'pendidikanterakhir' => 'required',
            'keahlianbahasa' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ], [
            'namaguru.required' => 'Nama Guru Wajib Diisi',
            'nipn.required' => 'NIPN Wajib Diisi',
            'nipn.unique' => 'NIPN Sudah Terpakai',
            'keahlianbahasa.required' => 'Keahlian Bahasa Wajib Diisi',
            'picture.required' => 'Foto Wajib Diisi',
            'picture.image' => 'Foto Yang Diupload Bukan Gambar',
            'picture.max' => 'Ukuran File Maksimal 2 mb',
        ]);

        // menyimpan data guru baru
        $guru = new Guru([
            'namaguru' => $request->input('namaguru'),
            'nipn' => $request->input('nipn'),
            'pendidikanterakhir' => $request->input('pendidikanterakhir'),
            'keahlianbahasa' => $request->input('keahlianbahasa')
        ]);
        $guru->save();

        // menyimpan gambar guru
        $picture = $request->file('picture');
        $filename = time() . '.' . $picture->getClientOriginalExtension();
        $picture->move(public_path('images/guru'), $filename);
        $guru->picture = $filename;
        $guru->save();

        if ($guru) {
            return redirect()->route('guru.index')->with('success', 'Guru Berhasil ditambahkan');
        } else {
            return redirect()->route('guru.index')->with('error', 'Guru Gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        // Mengambil data guru yang akan diupdate
        $data = Guru::findOrFail($guru->id);
        if ($request->picture == "") {
            // Validasi input
            $request->validate([
                'namaguru' => 'required',
                'nipn' => 'required',
                'pendidikanterakhir' => 'required',
                'keahlianbahasa' => 'required',

            ], [
                'namaguru.required' => 'Nama Guru Wajib Diisi',
                'nipn.required' => 'NIPN Wajib Diisi',
                'keahlianbahasa.required' => 'Keahlian Bahasa Wajib Diisi',
            ]);
        } else {
            $request->validate([
                'namaguru' => 'required',
                'nipn' => 'required',
                'pendidikanterakhir' => 'required',
                'keahlianbahasa' => 'required',
                'picture' => 'required|image|max:2024', // opsional, harus berupa gambar, maksimal 1 MB
            ], [
                'namaguru.required' => 'Nama Guru Wajib Diisi',
                'nipn.required' => 'NIPN Wajib Diisi',
                'keahlianbahasa.required' => 'Keahlian Bahasa Wajib Diisi',
                'picture.required' => 'Foto Wajib Diisi',
                'picture.image' => 'Foto Yang Diupload Bukan Gambar',
                'picture.max' => 'Ukuran File Maksimal 2 mb',
            ]);
        }


        // Mengupdate data guru
        $data->namaguru = $request->namaguru;
        $data->nipn = $request->nipn;
        $data->pendidikanterakhir = $request->pendidikanterakhir;
        $data->keahlianbahasa = $request->keahlianbahasa;

        // Jika file picture diupload, simpan dan set path ke field picture
        if ($request->hasFile('picture')) {
            // Hapus foto lama
            Storage::delete($data->foto);

            // Simpan foto baru
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('images/guru'), $filename);
            $data->picture = $filename;
        }

        $data->save();

        if ($data) {
            return redirect()->route('guru.index')->with('success', 'Guru Berhasil diubah');
        } else {
            return redirect()->route('guru.index')->with('error', 'Guru Gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();
        return response()->json(['success' => 'Guru Berhasil dihapus']);
    }
}
