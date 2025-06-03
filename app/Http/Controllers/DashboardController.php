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
        $mahasiswaTahun = DB::select('select substring(npm,1,2) as tahun, count(*) as jumlah from mahasiswa
        group by tahun;');
        $kelasProdi = DB::select('select tahun_akademik,prodi.nama, count(*) as jumlah from jadwal
        JOIN mata_kuliah ON mata_kuliah_id = mata_kuliah.id
        JOIN prodi ON prodi_id = prodi.id
        group by prodi.nama,tahun_akademik;');
        $kelasProdiIf = DB::select('select tahun_akademik,prodi.nama, count(*) as jumlah from jadwal
        JOIN mata_kuliah ON mata_kuliah_id = mata_kuliah.id
        JOIN prodi ON prodi_id = prodi.id
        where prodi.nama = "Informatika"
        group by prodi.nama,tahun_akademik;');
        $kelasProdiSi = DB::select('select tahun_akademik,prodi.nama, count(*) as jumlah from jadwal
        JOIN mata_kuliah ON mata_kuliah_id = mata_kuliah.id
        JOIN prodi ON prodi_id = prodi.id
        where prodi.nama = "Sistem Informasi"
        group by prodi.nama,tahun_akademik;');
        return view('dashboard.index', compact('mahasiswaProdi','mahasiswaSma','mahasiswaTahun','kelasProdi','kelasProdiIf','kelasProdiSi'));
    }
}
