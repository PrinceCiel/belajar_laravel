<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppdb;
use RealRashid\SweetAlert\Facades\Alert;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $ppdb = Ppdb::all();
        return view('ppdb.index',compact('ppdb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppdb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ppdb = new Ppdb;
        $ppdb->nama_lengkap     = $request->nama;
        $ppdb->jenis_kelamin    = $request->jenis_kelamin;
        $ppdb->agama            = $request->agama;
        $ppdb->alamat           = $request->alamat;
        $ppdb->telepon          = $request->telp;
        $ppdb->asal_sekolah     = $request->asal;
        $ppdb->save();
        Alert::success('Hore!', 'Data Berhasil Ditambahkan!!');
        return redirect()->route('ppdb.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ppdb = Ppdb::findOrFail($id);
        return view('ppdb.show',compact('ppdb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ppdb = Ppdb::findOrFail($id);
        return view('ppdb.edit', compact('ppdb'));
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
        $ppdb = Ppdb::findOrFail($id);
        $ppdb->nama_lengkap     = $request->nama;
        $ppdb->jenis_kelamin    = $request->jenis_kelamin;
        $ppdb->agama            = $request->agama;
        $ppdb->alamat           = $request->alamat;
        $ppdb->telepon          = $request->telp;
        $ppdb->asal_sekolah     = $request->asal;
        $ppdb->save();
        Alert::success('Hore!', 'Data Berhasil Diubah!!');
        return redirect()->route('ppdb.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ppdb = Ppdb::findOrFail($id);
        $ppdb->delete();
        Alert::success('Hore!', 'Data Berhasil Dihapus!!');
        return redirect()->route('ppdb.index');
    }
}
