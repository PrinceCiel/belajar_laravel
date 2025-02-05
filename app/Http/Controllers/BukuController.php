<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Genre;
use App\Models\Penerbit;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index',compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penerbit = Penerbit::all();
        $genre = Genre::all();
        return view('buku.create', compact('penerbit','genre'));
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
            'harga' => 'required',
            'stok' => 'required',
            'tgl' => 'required',
            'nama' => 'required|max:100',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ],
        [
            'nama.required' => 'Nama Produk Harus Diisi',
            'nama.max' => 'Nama -- Maksimal 100 Huruf',
            'harga.required' => 'Harga Harus Diisi',
            'harga.numeric' => 'Harga Harus Angka',
            'stok.required' => 'Stok Harus Diisi',
            'stok.numeric' => 'Stok Harus Angka',
            'tgl.required' => 'Tanggal Harus Diisi',
        ]);
        $buku = new Buku;
        $buku->nama_buku = $request->nama;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;
        if($request->hasFile('image')){
            $img = $request->file('image');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move(('images/buku'), $name);
            $buku->image = $name;
        }
        $buku->id_penerbit = $request->id_penerbit;
        $buku->tanggal_terbit = $request->tgl;
        $buku->id_genre = $request->id_genre;
        $buku->save();
        Alert::success('Hore!', 'Data Berhasil Ditambahkan!!');
        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        $id2 = $buku->id_penerbit;
        $penerbit = Penerbit::findOrFail($id2);
        $id3 = $buku->id_genre;
        $genre = Genre::findOrFail($id3);
        return view('buku.show',compact('buku','genre','penerbit'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $id2 = $buku->id_penerbit;
        $select1 = Penerbit::findOrFail($id2);
        $id3 = $buku->id_genre;
        $select2 = Genre::findOrFail($id3);
        $penerbit = Penerbit::all();
        $genre = Genre::all();
        return view('buku.edit',compact('buku','genre','penerbit','select1','select2'));
        
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
            'harga' => 'required',
            'stok' => 'required',
            'tgl' => 'required',
            'nama' => 'required|max:100',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ],
        [
            'nama.required' => 'Nama Produk Harus Diisi',
            'nama.max' => 'Nama -- Maksimal 100 Huruf',
            'harga.required' => 'Harga Harus Diisi',
            'harga.numeric' => 'Harga Harus Angka',
            'stok.required' => 'Stok Harus Diisi',
            'stok.numeric' => 'Stok Harus Angka',
            'tgl.required' => 'Tanggal Harus Diisi',
        ]);
        $buku = Buku::findOrFail($id);
        $buku->nama_buku = $request->nama;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;
        if ($request->hasFile('image')) {
            $buku->deleteImage();
            $img = $request->file('image');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/buku', $name);
            $buku->image = $name;
        }
        $buku->id_penerbit = $request->id_penerbit;
        $buku->tanggal_terbit = $request->tgl;
        $buku->id_genre = $request->id_genre;
        $buku->save();
        Alert::success('Hore!', 'Data Berhasil Diubah!!');
        return redirect()->route('buku.index');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        Alert::success('Hore!', 'Data Berhasil Dihapus!!');
        return redirect()->route('buku.index');
    }
}
