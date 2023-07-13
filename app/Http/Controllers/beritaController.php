<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class beritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin/tambah');
    }

    public function store(Request $request){
        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
        $berita->link = $request->link;
        $berita->save();
        return redirect()->route('home')->with('sukses','Company has been created successfully.');
    }

    public function edit(Berita $berita) {
        return view('admin.edit',['berita' => $berita]);
    }

    public function update(Request $request, Berita $berita){
        $berita = Berita::find($berita->id);
        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
        $berita->link = $request->link;
        $berita->save();
        return redirect()->route('home')->with('sukses','Company has been created successfully.');

    }

    public function delete(Berita $berita){
        $berita->delete();
        return redirect()->route('home')->with('sukses','Company has been created successfully.');

    }
}
