<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagename='Daftar Akun';
        $data=Akun::all();
        return view('admin.akun.index', compact('data','pagename'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pagename = 'Form Input Akun';
        return view('admin.akun.create', compact('pagename'));
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
            'txtno_akun'=>'required', //required = tidak boleh kosong
            'txtnama_akun'=>'required',
            'txt_saldo'=>'required',
        ]);

        $data_akun = new Akun([
            'noAkun'=> $request->get('txtno_akun'),
            'namaAkun'=> $request->get('txtnama_akun'),
            'saldo'=> $request->get('txt_saldo'),
        ]);

        $data_akun->save();
        return redirect('admin/akun')->with('sukses','data berhasil disimpan');
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
        $pagename = 'Update Akun';
        $data=Akun::find($id);
        return view('admin.akun.edit', compact('data', 'pagename'));
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
            'txtno_akun'=>'required', //required = tidak boleh kosong
            'txtnama_akun'=>'required',
            'txt_saldo'=>'required',
        ]);

        $akun=Akun::find($id);

        $akun->noAkun= $request->get('txtno_akun');
        $akun->namaAkun= $request->get('txtnama_akun');
        $akun->saldo= $request->get('txt_saldo');

        $akun->save();
        return redirect('admin/akun')->with('sukses','data berhasil diupdate');

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
        $akun = Akun::find($id);

        $akun->delete();
        return redirect('admin/akun')->with('sukses','data telah dihapus');
    }
}
