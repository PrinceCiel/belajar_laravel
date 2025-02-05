<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Buku;
use App\Models\Pembeli;
class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trx = Transaksi::all();
        return view('transaksi.index', compact('trx'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        $pembeli = Pembeli::all();
        return view('transaksi.create', compact('buku','pembeli'));
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
            'jumlah' => 'required',
            'jumlah' => 'required|numeric',
            'tgl' => 'required',
            'id_buku' => 'required',
            'id_pembeli' => 'required'
        ],
        [
            'jumlah.required' => 'Jumlah Buku Harus Diisi',
            'jumlah.numeric' => 'Jumlah -- Maksimal 100 Buku',
            'tgl.required' => 'Tanggal Trx Harus Diisi',
            'id_buku.required' => 'Nama Buku Harus Diisi',
            'id_pembeli.required' => 'Nama Pembeli Harus Diisi',
            
        ]);
        $trx = new Transaksi;
        $trx->jumlah = $request->jumlah;
        $trx->tanggal_transaksi = $request->tgl;
        $trx->id_buku = $request->id_buku;
        $trx->id_pembeli = $request->id_pembeli;
        $trx->save();
        Alert::success('Hore!', 'Data Berhasil Ditambahkan!!');
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trx = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('trx'));
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
        $trx = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('trx'));
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
            'jumlah' => 'required',
            'jumlah' => 'required|numeric',
            'tgl' => 'required',
            'id_buku' => 'required',
            'id_pembeli' => 'required'
        ],
        [
            'nama.required' => 'Nama Produk Harus Diisi',
            'nama.max' => 'Nama -- Maksimal 100 Huruf'
        ]);
        $trx = Transaksi::findOrFail($id);
        $trx->jumlah = $request->jumlah;
        $trx->tanggal_transaksi = $request->tgl;
        $trx->id_buku = $request->id_buku;
        $trx->id_pembeli = $request->id_pembeli;
        $trx->save();
        Alert::success('Hore!', 'Data Berhasil Diubah!!');
        return redirect()->route('transaksi.index');
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
        $trx = Transaksi::findOrFail($id);
        $trx->delete();
        Alert::success('Hore!', 'Data Berhasil Dihapus!!');
        return redirect()->route('transaksi.index');
    }
}
