<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allKategori = Kategori::all();
        return view('kategori.index', compact('allKategori'));
        // return "halo boss";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama_kategori' => 'required|max:255',
        ]);
        Kategori::create($validatedData);
    return redirect()->route('kategori.index')->with('succes','Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
        return view('kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $request->validate(['nama_kategori'=>'required|max:255',
        ]);
        $kategori->update($validatedData);
        return redirect()->route('kategori.index')->with('succes','Kategori berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('succes','kategori berhasil dihapus');
    }
}
