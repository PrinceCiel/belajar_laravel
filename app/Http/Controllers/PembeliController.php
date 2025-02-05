<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Pembeli;
class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = Pembeli::all();
        return view('pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'jk' => 'required' ,
            'tlp' => 'required' ,
            'nama' => 'required|max:100',
            'tlp' => 'required|max:14'
        ],
        [
            'nama.required' => 'Nama Produk Harus Diisi',
            'nama.max' => 'Nama -- Maksimal 100 Huruf',
            'jk.required' => 'Jenis Kelamin Harus Diisi',
            'tlp.required' => 'No Telepon Harus Diisi',
            'tlp.max' => 'NO Telepon -- Maksimal 14 Angka'
        ]);
        $pembeli = new Pembeli;
        $pembeli->nama_pembeli = $request->nama;
        $pembeli->jenis_kelamin = $request->jk;
        $pembeli->telepon = $request->tlp;
        $pembeli->save();
        Alert::success('Hore!', 'Data Berhasil Ditambahkan!!');
        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembeli'));
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
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.edit', compact('pembeli'));
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
        $validated = $request->validate([
            'nama' => 'required',
            'jk' => 'required' ,
            'tlp' => 'required' ,
            'nama' => 'required|max:100',
            'tlp' => 'required|max:14'
        ],
        [
            'nama.required' => 'Nama Produk Harus Diisi',
            'nama.max' => 'Nama -- Maksimal 100 Huruf',
            'jk.required' => 'Jenis Kelamin Harus Diisi',
            'tlp.required' => 'No Telepon Harus Diisi',
            'tlp.max' => 'NO Telepon -- Maksimal 14 Angka'
        ]);
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->nama_pembeli = $request->nama;
        $pembeli->jenis_kelamin = $request->jk;
        $pembeli->telepon = $request->tlp;
        $pembeli->save();
        Alert::success('Hore!', 'Data Berhasil Diubah!!');
        return redirect()->route('pembeli.index');
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
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->destroy();
        Alert::success('Hore!', 'Data Berhasil Dihapus!!');
        return redirect()->route('pembeli.index');
        
    }
}
