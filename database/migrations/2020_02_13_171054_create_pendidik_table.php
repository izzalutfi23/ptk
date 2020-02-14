<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidik', function (Blueprint $table) {
            $table->string('nik',20);
            $table->string('gelar_depan', 15);
            $table->string('nama_lengkap', 50);
            $table->string('nuptk',20);
            $table->string('j_kel',15);
            $table->string('tempat_lahir',25);
            $table->string('agama',15);
            $table->string('status_perkawinan',15);
            $table->string('nama_ibukandung',50);
            $table->string('nama_satuanpend',30);
            $table->string('jenjang',10);
            $table->string('npsn',10);
            $table->string('alamat_satuanpend',60);
            $table->string('kelurahan',30);
            $table->string('status',10);
            $table->string('kecamatan',25);
            $table->string('status_peg',10);
            $table->string('jenis_ptk',20);
            $table->string('mapel_ygdiajarkan',30);
            $table->string('tmt_pertama',30);
            $table->string('surat_tugas',40);
            $table->string('nip',20);
            $table->string('gol',7);
            $table->string('masa_kerja',30);
            $table->string('pendidikan',30);
            $table->string('thn_lulus',20);
            $table->string('jurusan_pendterakhir',30);
            $table->string('thn_masukkuliah',10);
            $table->string('semester_kuliah',5);
            $table->string('jurusan_progdi',30);
            $table->string('universitas',50);
            $table->string('ipk_terakhir',5);
            $table->string('perkiraan_thnlulus',5);
            $table->string('sertifikasi',20);
            $table->string('no_pesertasertifikasi',20);
            $table->string('nrg',20);
            $table->string('mapel_sertifikasi',30);
            $table->string('npwp',20);
            $table->string('no_hp',15);
            $table->string('email',50);
            $table->string('alamat_rumah',80);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendidik');
    }
}
