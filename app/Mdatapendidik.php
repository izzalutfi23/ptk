<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mdatapendidik extends Model
{
    protected $table = 'pendidik';
    protected $fillable = ['nik', 'gelar_depan', 'nama_lengkap', 'gelar_belakang', 'nuptk', 'j_kel', 'tempat_lahir', 'tgl_lahir', 'agama', 'status_perkawinan', 'nama_ibukandung', 'nama_satuanpend', 'jenjang', 'npsn', 'alamat_satuanpend', 'kelurahan', 'status', 'kecamatan', 'status_peg', 'jenis_ptk', 'mapel_ygdiajarkan', 'tmt_pertama', 'surat_tugas', 'nip', 'gol', 'masa_kerja', 'tmt_gol', 'pendidikan', 'thn_lulus', 'jurusan_pendterakhir', 'thn_masukkuliah', 'semester_kuliah', 'jurusan_progdi', 'universitas', 'ipk_terakhir', 'perkiraan_thnlulus', 'sertifikasi', 'no_pesertasertifikasi', 'nrg', 'mapel_sertifikasi', 'npwp', 'no_hp', 'email', 'alamat_rumah'];
    protected $primaryKey = 'nik';
}
