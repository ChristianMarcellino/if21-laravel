<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $mahasiswaProdi = DB::select('select prodi.nama, count(*) as jumlah From mahasiswa
        JOIN prodi on mahasiswa.prodi_id = prodi.id
        group by prodi.nama;');
        $mahasiswaSma = DB::select('select asal_sma, count(*) as jumlah From mahasiswa
        group by asal_sma;');

        // Query Builder Laravel
        $mahasiswaTahun = DB::table('mahasiswa')
        ->select(DB::raw('substring(npm,1,2) as tahun'), DB::raw('count(*) as jumlah'))
        ->groupBy('tahun')
        ->get();

        $kelasProdi = DB::table('jadwal')
        ->join('mata_kuliah', 'mata_kuliah_id' , '=' ,'mata_kuliah.id')
        ->join('prodi','prodi_id', '=', 'prodi.id')
        ->select('tahun_akademik','prodi.nama', DB::raw('count(*) as jumlah'))
        ->groupBy('prodi.nama', 'tahun_akademik')
        ->get();

        $prodiCollection = collect($kelasProdi);

        $informatika = $prodiCollection->where('nama', 'Informatika');
        $sistemInformasi = $prodiCollection->where('nama', 'Sistem Informasi');

        $tahunAkademik = $prodiCollection->pluck('tahun_akademik')->unique()->values();

        return view('dashboard.index', compact('mahasiswaProdi','mahasiswaSma','mahasiswaTahun','informatika','sistemInformasi','tahunAkademik'));
    }
}
