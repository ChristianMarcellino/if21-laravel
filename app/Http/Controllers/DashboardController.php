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
        return view('dashboard.index', compact('mahasiswaProdi','mahasiswaSma','mahasiswaTahun'));
    }
}
