<?php

namespace App\Http\Controllers;

use App\Models\Mata_Kuliah;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mata_kuliah = Mata_Kuliah::all();
        $prodi = Prodi::all();
        return view('mata_kuliah.index', compact('mata_kuliah','prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view('mata_kuliah.create', compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'kode_mk' => 'required|unique:mata_kuliah|max:6',
            'nama' => 'required|unique:mata_kuliah|max:50',
            'prodi_id' => 'required',
        ]);

        Mata_Kuliah::create($input);

        return redirect()->route('mata_kuliah.index')->with('success', 'Mata Kuliah Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mata_Kuliah $Mata_Kuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mata_kuliah $Mata_Kuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mata_kuliah $Mata_Kuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mata_Kuliah $Mata_Kuliah)
    {
        //
    }
}
