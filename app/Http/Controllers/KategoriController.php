<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allkategori = kategori::all();
        return view('kategori.index', compact('allkategori'));
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
        // buat validasi
        $validateData = $request->validate(['nama_kategori' => 'required|max:100', ]);

        // simpan data
        kategori::create($validateData);

        // redirect ke index kategori
        return redirect('/kategori');

    }

    /**
     * Display the specified resource.
     */
    public function show(kategori $kategori)
    {
        return view('kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kategori $kategori)
    {
        // buat validasi
        $validateData = $request->validate(['nama_kategori' => 'required|max:100', ]);

        // update data
        $kategori->update($validateData);

        // redirect ke index kategori
        return redirect()->route('kategori.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kategori $kategori)
    {
        $kategori->delete();
        
        // redirect ke index kategori
        return redirect()->route('kategori.index');
    }
}
