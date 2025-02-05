<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Genre;
class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre = Genre::all();
        return view('genre.index',compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genre.create');
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
            'genre' => 'required',
            'genre' => 'required|max:50'
        ],
        [
            'genre.required' => 'Genre Harus Diisi',
            'genre.max' => 'Genre -- Maksimal 50 Huruf'
        ]);
        $genre = new Genre;
        $genre->genre = $request->genre;
        $genre->save();
        Alert::success('Hore!', 'Data Berhasil Ditambahkan!!');
        return redirect()->route('genre.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.show',compact('genre'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.edit',compact('genre'));
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
            'genre' => 'required',
            'genre' => 'required|max:50'
        ],
        [
            'genre.required' => 'Genre Harus Diisi',
            'genre.max' => 'Genre -- Maksimal 50 Huruf'
        ]);
        $genre = Genre::findorFail($id);
        $genre->genre = $request->genre;
        $genre->save();
        Alert::success('Hore!', 'Data Berhasil Diubah!!');
        return redirect()->route('genre.index');
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
        $genre = Genre::findorFail($id);
        $genre->delete();
        Alert::success('Hore!', 'Data Berhasil Dihapus!!');
        return redirect()->route('genre.index');
    }
}
