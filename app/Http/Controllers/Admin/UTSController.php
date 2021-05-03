<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\UTS;
use Illuminate\Http\Request;

class UTSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagename='Jadwal UTS';
        $data=UTS::all();
        return view('admin.uts.index', compact('data','pagename'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pagename = 'Form Input Mata Kuliah';
        return view('admin.uts.create', compact('pagename'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'txtmata_kuliah'=>'required', //required = tidak boleh kosong
            'txt_dosen'=>'required',
            'txt_hari'=>'required',
        ]);

        $data_uts = new UTS([
            'mata_kuliah'=> $request->get('txtmata_kuliah'),
            'dosen'=> $request->get('txt_dosen'),
            'hari'=> $request->get('txt_hari'),
        ]);

        $data_uts->save();
        return redirect('admin/uts')->with('sukses','data UTS berhasil disimpan');
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
        //
        $pagename = 'Update Mata Kuliah UTS';
        $data=UTS::find($id);
        return view('admin.uts.edit', compact('data', 'pagename'));
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
        //
        $request->validate([
            'txtmata_kuliah'=>'required', //required = tidak boleh kosong
            'txt_dosen'=>'required',
            'txt_hari'=>'required',
        ]);

        $uts=UTS::find($id);

        $uts->nama_tugas = $request->get('txtmata_kuliah');
        $uts->id_kategori= $request->get('txt_dosen');
        $uts->ket_tugas= $request->get('txt_hari');

        $uts->save();
        return redirect('admin/uts')->with('sukses','data UTS berhasil diupdate');
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
        $uts = UTS::find($id);

        $uts->delete();
        return redirect('admin/uts')->with('sukses','data UTS telah dihapus');
    }
}
