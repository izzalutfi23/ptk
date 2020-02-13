<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mdatasekolah extends Model
{
    protected $table = 'sekolah';
    protected $fillable = ['npsn', 'nama_sekolah', 'alamat', 'desa', 'kecamatan', 'jenjang', 'status'];
    protected $primaryKey = 'npsn';
}
