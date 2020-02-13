@extends('../layout/main')
@section('title', 'Tambah Data Pendidik | Aplikasi Data PTK')
@section('container')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-study icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Data Pendidik
                        <div class="page-title-subheading">Tambah Data Pendidik.
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Tambah Data Pendidik</div>
                    <div class="table-responsive">
                        <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
                            <form action="{{url('/datapendidik')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Data Pribadi</h5>
                                                <div class="position-relative form-group">
                                                    <label class="">NIK</label>
                                                    <input name="nik" type="number" placeholder="Ex : 3326117103860XXX" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Gelar Depan</label>
                                                    <input name="gelar_depan" type="text" placeholder="Ex : Drs" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Nama Lengkap</label>
                                                    <input name="nama_lengkap" type="text" placeholder="Ex : Riska" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Gelar Belakang</label>
                                                    <input name="gelar_belakang" type="text" placeholder="Ex : S.kom" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">NUPTK</label>
                                                    <input name="nuptk" type="text" placeholder="Ex : 7054762664300060" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Jenis Kelamin</label>
                                                    <select name="j_kel" class="form-control" required="required">
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Tempat Lahir</label>
                                                    <input name="tempat_lahir" type="text" placeholder="Ex : Rembang" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Tgl Lahir</label>
                                                    <input name="tgl_lahir" type="text" placeholder="Ex : 15 Oktober 2000" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Agama</label>
                                                    <input name="agama" type="text" placeholder="Ex : Islam" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Status Perkawinan</label>
                                                    <input name="status_perkawinan" type="text" placeholder="Ex : Kawin" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Nama Ibu Kandung</label>
                                                    <input name="nama_ibukandung" type="text" placeholder="Ex : Haryanti" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Unit Kerja/Tempat Tugas</h5>
                                                <div class="position-relative form-group">
                                                    <label class="">Nama Satuan Pendidikan (Sekolah)</label>
                                                    <input name="nama_satuanpend" type="text" placeholder="Ex : SD Negeri Kramatsari 01" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Jenjang</label>
                                                    <input name="jenjang" type="text" placeholder="Ex : SD" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">NPSN</label>
                                                    <input name="npsn" type="text" placeholder="Ex :  69881389" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Alamat Satuan Pendidikan</label>
                                                    <input name="alamat_satuanpend" type="text" placeholder="Ex : Jl. Wilis No. 20A Pekalongan" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Kelurahan</label>
                                                    <input name="kelurahan" type="text" placeholder="Ex : Bendan" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="NEGERI">NEGERI</option>
                                                        <option value="SWASTA">SWASTA</option>
                                                    </select>
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Kecamatan</label>
                                                    <input name="kecamatan" type="text" placeholder="Ex : Barat" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Kepegawaian</h5>
                                                <div class="position-relative form-group">
                                                    <label class="">Status Kepegawain</label>
                                                    <select name="status_peg" class="form-control">
                                                        <option value="GTT">GTT</option>
                                                        <option value="GTY">GTY</option>
                                                        <option value="PNS">PNS</option>
                                                        <option value="PTT">PTT</option>
                                                        <option value="PTY">PTY</option>
                                                    </select>
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Jenis PTK</label>
                                                    <input name="jenis_ptk" type="text" placeholder="Ex : Pendidik/Guru" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Mapel yg Diajarkan</label>
                                                    <input name="mapel_ygdiajarkan" type="text" placeholder="Ex : Guru SD" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">TMT Pertama</label>
                                                    <input name="tmt_pertama" type="text" placeholder="Ex : 25/11/2014" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Nomor SK (Surat Tugas)</label>
                                                    <input name="surat_tugas" type="text" placeholder="Ex : 017/PRA/D/VII/2013" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Khusus PNS</h5>
                                                <div class="position-relative form-group">
                                                    <label class="">NIP</label>
                                                    <input name="nip" type="text" placeholder="Ex : 201401012010011003" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Golongan</label>
                                                    <input name="gol" type="text" placeholder="Ex : IV B" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Masa Kerja Gol (thn Bln)</label>
                                                    <input name="masa_kerja" type="text" placeholder="Ex 1 Thn !0 Bln" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">TMT Golongan</label>
                                                    <input name="tmt_gol" type="text" placeholder="Ex : 29556" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Kualifikasi Pendidikan Terakhir</h5>
                                                <div class="position-relative form-group">
                                                    <label class="">Pendidikan</label>
                                                    <input name="pendidikan" type="text" placeholder="Ex : S1" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Tahun Lulus</label>
                                                    <input name="thn_lulus" type="text" placeholder="Ex : 2015" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Jurusan Pendidikan Terakhir</label>
                                                    <input name="jurusan_pendterakhir" type="text" placeholder="Ex : Teknik Informatika" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Bagi yg Sedang melanjutkan S1/DIV</h5>
                                                <div class="position-relative form-group">
                                                    <label class="">Tahun Masuk Kuliah</label>
                                                    <input name="thn_masukkuliah" type="text" placeholder="Ex : 2017" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Semester Kuliah</label>
                                                    <input name="semester_kuliah" type="text" placeholder="Ex : 2" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Jurusan/Progdi</label>
                                                    <input name="jurusan_progdi" type="text" placeholder="Ex : Teknik Informatika" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Universitas</label>
                                                    <input name="universitas" type="text" placeholder="Ex : Udinus" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">IPK Terakhir</label>
                                                    <input name="ipk_terakhir" type="text" placeholder="Ex : 3.00" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Perkiraan Tahun Lulus</label>
                                                    <input name="perkiraan_thnlulus" type="text" placeholder="Ex : 2020" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Data Sertifikasi</h5>
                                                <div class="position-relative form-group">
                                                    <label class="">Sertifikasi</label>
                                                    <select name="sertifikasi" class="form-control">
                                                        <option value="Belum Sertifikasi">Belum Sertifikasi</option>
                                                        <option value="Sudah Sertifikasi">Sudah Sertifikasi</option>
                                                    </select>
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">No. Peserta Sertifikasi</label>
                                                    <input name="no_pesertasertifikasi" type="text" placeholder="Ex : 4567678" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">NRG</label>
                                                    <input name="nrg" type="text" placeholder="Ex : 074232052026" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Mapel Sertifikasi</label>
                                                    <input name="mapel_sertifikasi" type="text" placeholder="Ex : Guru Kelas SD" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <div class="position-relative form-group">
                                                    <label class="">NPWP</label>
                                                    <input name="npwp" type="text" placeholder="Ex : 88.678.876.9-513.000" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">No Hp</label>
                                                    <input name="no_hp" type="text" placeholder="Ex : 089786784543" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Email</label>
                                                    <input name="email" type="email" placeholder="Ex : email@gmail.com" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Alamat Rumah / Domisili</label>
                                                    <textarea class="form-control" name="alamat_rumah"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">
                <div class="app-footer-left">
                </div>
                <div class="app-footer-right">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                &copy 2019 E-data PTK
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer -->

</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>
@endsection()