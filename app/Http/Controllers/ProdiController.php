<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::all();
        return view('prodi.index',compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = \App\Models\Fakultas::all();
        return view('prodi.create', compact('fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'nama' => 'required|unique:fakultas|max:50',
            'singkatan' => 'required|unique:fakultas|max:4',
            'kaprodi' => 'required|max:30',
            'sekretaris' => 'required|max:30',
            'fakultas_id' => 'required|'
        ]);

        Prodi::create($input);

        return redirect()->route('prodi.index')->with('success', 'Fakultas Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
