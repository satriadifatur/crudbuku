<?php

namespace App\Http\Controllers;

use App\Models\penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allpenerbit = penerbit::all();
        return view('penerbit.index', compact('allpenerbit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // buat validasi
        $validateData = $request->validate(['nama_penerbit' => 'required|max:100', ]);

        // simpan data
        penerbit::create($validateData);

        // redirect ke index penerbit
        return redirect()->route('penerbit.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(penerbit $penerbit)
    {
        return view('penerbit.show', compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(penerbit $penerbit)
    {
        return view('penerbit.edit', compact('penerbit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, penerbit $penerbit)
    {
        // buat validasi
        $validateData = $request->validate(['nama_penerbit' => 'required|max:100', ]);

        // update data
        $penerbit->update($validateData);

        // redirect ke index penerbit
        return redirect()->route('penerbit.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(penerbit $penerbit)
    {
        $penerbit->delete();

        // redirect ke index penerbit
        return redirect()->route('penerbit.index');
    }
}
