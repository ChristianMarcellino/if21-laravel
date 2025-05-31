<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'Jadwal';
    protected $fillable = ['tahun_akademik', 'kode_smt', 'kelas','mata_kuliah_id', 'dosen_id', 'sesi_id'];
}
