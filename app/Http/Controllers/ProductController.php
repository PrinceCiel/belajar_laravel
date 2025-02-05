<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
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
            'nm' => 'required',
            'merk' => 'required|max:20',
            'price' => 'required|max:12',
            'stock' => 'required|numeric',
        ],
        [
            'nm.required' => 'Nama Produk Harus Diisi',
            'merk.required' => 'Merk Harus Diisi',
            'merk.max' => 'Merk -- Maksimal 10 Huruf',
            'price.required' => 'Harga Harus Diisi',
            'stock.required' => 'Stok Harus Diisi',
            'price.numeric' => 'Harga Harus Angka',
        ]);
        $product = new Product;
        $product->name_product = $request->nm;
        $product->merk = $request->merk;
        $product->price = $request->price;
        $product->stock = $request->stock;
        if($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move(('images/product'), $name);
            $product->cover = $name;
        }
        $product->save();
        Alert::success('Hore!', 'Data Berhasil Ditambahkan!!');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
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
        $product = Product::findOrFail($id);
        $product->name_product = $request->nm;
        $product->merk = $request->merk;
        $product->price = $request->price;
        $product->stock = $request->stock;
        if ($request->hasFile('cover')) {
            $product->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/product', $name);
            $product->cover = $name;
        }
        $product->save();
        Alert::success('Hore!', 'Data Berhasil Diubah!!');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        Alert::success('Hore!', 'Data Berhasil Dihapus!!');
        return redirect()->route('product.index');
    }
}
