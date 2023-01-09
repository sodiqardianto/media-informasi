<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $pesan = Pesan::all();
        return DataTables::of($pesan)
            ->addIndexColumn()
            ->addColumn('action', function ($pesan) {
                if ($pesan->id == 1) {
                    $delete = '<button data-id="' . $pesan->id . '" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> Delete</button>';
                } else {
                    $delete = '<button data-id="' . $pesan->id . '" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> Delete</button>';
                }
                $edit = '<a href="' . route('pesan.edit', $pesan->id) . '" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i> Ubah</a>';
                return $edit . ' ' . $delete;
            })
            ->make(true);
    }
    public function index()
    {
        return view('pesan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_lengkap' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'komentar' => 'required',
        ]);

        Pesan::create([
            'nama' => $request->nama_lengkap,
            'notelp' => $request->no_telp,
            'email' => $request->email,
            'isipesan' => $request->komentar,
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesan $pesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesan $pesan)
    {
        //
    }
}
