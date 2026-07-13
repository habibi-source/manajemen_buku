<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $allPenerbit = Penerbit::all();
        return view('penerbit.index', compact('allPenerbit'));
        // return "halo boss";
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama_penerbit' => 'required|string|max:100', // max 100 sesuai migration Anda
    ]);
    Penerbit::create($validatedData);
    return redirect()->route('penerbit.index')->with('success', 'Penerbit berhasil ditambahkan');
}

    /**
     * Display the specified resource.
     */
    public function show(Penerbit $penerbit)
    {
      return view('penerbit.show', compact('penerbit'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerbit $penerbit)
    {
      return view('penerbit.edit', compact('penerbit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerbit $penerbit)
    {
     $validatedData = $request->validate([
        'nama_penerbit' => 'required|max:100', // sesuaikan max dengan migration
    ]);

    $penerbit->update($validatedData);

    return redirect()->route('penerbit.index')->with('success', 'Penerbit berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerbit $penerbit)
    {
        $penerbit->delete();
        return redirect()->route('penerbit.index')->with('success', 'Penerbit berhasil dihapus');
    }
}
