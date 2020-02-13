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
                        <div class="page-title-subheading">Edit Data Pendidik.
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Edit Data Pendidik</div>
                    <div class="table-responsive">
                        <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
                            @foreach($datapendidik as $data)
                            <form action="{{url('/datapendidik')}}" method="post">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Data Pribadi</h5>
                                                <div class="position-relative form-group">
                                                    <label class="">NIK</label>
                                                    <input name="nik" readonly="readonly" type="number" value="{{$data->nik}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Gelar Depan</label>
                                                    <input name="gelar_depan" type="text" value="{{$data->gelar_depan}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Nama Lengkap</label>
                                                    <input name="nama_lengkap" type="text" value="{{$data->nama_lengkap}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Gelar Belakang</label>
                                                    <input name="gelar_belakang" type="text" value="{{$data->gelar_belakang}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">NUPTK</label>
                                                    <input name="nuptk" type="text" value="{{$data->nuptk}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Jenis Kelamin</label>
                                                    <select name="j_kel" class="form-control" required="required">
                                                        <option value="Laki-laki" @if($data->j_kel == "Laki-laki") selected="selected" @endif>Laki-laki</option>
                                                        <option value="Perempuan" @if($data->j_kel == "Perempuan") selected="selected" @endif>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Tempat Lahir</label>
                                                    <input name="tempat_lahir" type="text" value="{{$data->tempat_lahir}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Tgl Lahir</label>
                                                    <input name="tgl_lahir" type="text" value="{{$data->tgl_lahir}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Agama</label>
                                                    <input name="agama" type="text" value="{{$data->agama}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Status Perkawinan</label>
                                                    <input name="status_perkawinan" type="text" value="{{$data->status_perkawinan}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Nama Ibu Kandung</label>
                                                    <input name="nama_ibukandung" type="text" value="{{$data->nama_ibukandung}}" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Unit Kerja/Tempat Tugas</h5>
                                                <div class="position-relative form-group">
                                                    <label class="">Nama Satuan Pendidikan (Sekolah)</label>
                                                    <input name="nama_satuanpend" type="text" value="{{$data->nama_satuanpend}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Jenjang</label>
                                                    <input name="jenjang" class="form-control" type="text" value="{{$data->jenjang}}" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">NPSN</label>
                                                    <input name="npsn" type="text" value="{{$data->npsn}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Alamat Satuan Pendidikan</label>
                                                    <input name="alamat_satuanpend" type="text" value="{{$data->alamat_satuanpend}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Kelurahan</label>
                                                    <input name="kelurahan" type="text" value="{{$data->kelurahan}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="NEGERI" @if($data->status == "NEGERI") selected="selected" @endif>NEGERI</option>
                                                        <option value="SWASTA" @if($data->status == "SWASTA") selected="selected" @endif>SWASTA</option>
                                                    </select>
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Kecamatan</label>
                                                    <input name="kecamatan" type="text" value="{{$data->kecamatan}}" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Kepegawaian</h5>
                                                <div class="position-relative form-group">
                                                    <label class="">Status Kepegawain</label>
                                                    <select name="status_peg" class="form-control">
                                                        <option value="GTT" @if($data->status_peg == "GTT") selected="selected" @endif>GTT</option>
                                                        <option value="GTY" @if($data->status_peg == "GTY") selected="selected" @endif>GTY</option>
                                                        <option value="PNS" @if($data->status_peg == "PNS") selected="selected" @endif>PNS</option>
                                                        <option value="PTT" @if($data->status_peg == "PTT") selected="selected" @endif>PTT</option>
                                                        <option value="PTY" @if($data->status_peg == "PTY") selected="selected" @endif>PTY</option>
                                                    </select>
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Jenis PTK</label>
                                                    <input name="jenis_ptk" type="text" value="{{$data->jenis_ptk}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Mapel yg Diajarkan</label>
                                                    <input name="mapel_ygdiajarkan" type="text" value="{{$data->mapel_ygdiajarkan}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">TMT Pertama</label>
                                                    <input name="tmt_pertama" type="text" value="{{$data->tmt_pertama}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Nomor SK (Surat Tugas)</label>
                                                    <input name="surat_tugas" type="text" value="{{$data->surat_tugas}}" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Khusus PNS</h5>
                                                <div class="position-relative form-group">
                                                    <label class="">NIP</label>
                                                    <input name="nip" type="text" value="{{$data->kecamatan}}nip" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Golongan</label>
                                                    <input name="gol" type="text" value="{{$data->gol}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Masa Kerja Gol (thn Bln)</label>
                                                    <input name="masa_kerja" type="text" value="{{$data->masa_kerja}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">TMT Golongan</label>
                                                    <input name="tmt_gol" type="text" value="{{$data->tmt_gol}}" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Kualifikasi Pendidikan Terakhir</h5>
                                                <div class="position-relative form-group">
                                                    <label class="">Pendidikan</label>
                                                    <input name="pendidikan" type="text" value="{{$data->pendidikan}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Tahun Lulus</label>
                                                    <input name="thn_lulus" type="text" value="{{$data->thn_lulus}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Jurusan Pendidikan Terakhir</label>
                                                    <input name="jurusan_pendterakhir" type="text" value="{{$data->jurusan_pendterakhir}}" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Bagi yg Sedang melanjutkan S1/DIV</h5>
                                                <div class="position-relative form-group">
                                                    <label class="">Tahun Masuk Kuliah</label>
                                                    <input name="thn_masukkuliah" type="text" value="{{$data->thn_masukkuliah}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Semester Kuliah</label>
                                                    <input name="semester_kuliah" type="text" value="{{$data->semester_kuliah}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Jurusan/Progdi</label>
                                                    <input name="jurusan_progdi" type="text" value="{{$data->jurusan_progdi}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Universitas</label>
                                                    <input name="universitas" type="text" value="{{$data->universitas}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">IPK Terakhir</label>
                                                    <input name="ipk_terakhir" type="text" value="{{$data->ipk_terakhir}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Perkiraan Tahun Lulus</label>
                                                    <input name="perkiraan_thnlulus" type="text" value="{{$data->perkiraan_thnlulus}}" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Data Sertifikasi</h5>
                                                <div class="position-relative form-group">
                                                    <label class="">Sertifikasi</label>
                                                    <select name="sertifikasi" class="form-control">
                                                        <option value="Belum Sertifikasi" @if($data->sertifikasi == "Belum Sertifikasi") selected="selected" @endif>Belum Sertifikasi</option>
                                                        <option value="Sudah Sertifikasi" @if($data->sertifikasi == "Sudah Sertifikasi") selected="selected" @endif>Sudah Sertifikasi</option>
                                                    </select>
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">No. Peserta Sertifikasi</label>
                                                    <input name="no_pesertasertifikasi" type="text" value="{{$data->no_pesertasertifikasi}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">NRG</label>
                                                    <input name="nrg" type="text" value="{{$data->nrg}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Mapel Sertifikasi</label>
                                                    <input name="mapel_sertifikasi" type="text" value="{{$data->mapel_sertifikasi}}" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <div class="position-relative form-group">
                                                    <label class="">NPWP</label>
                                                    <input name="npwp" type="text" value="{{$data->npwp}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">No Hp</label>
                                                    <input name="no_hp" type="text" value="{{$data->no_hp}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Email</label>
                                                    <input name="email" type="email" value="{{$data->email}}" class="form-control" required="required">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label class="">Alamat Rumah / Domisili</label>
                                                    <textarea class="form-control" name="alamat_rumah">{{$data->alamat_rumah}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Edit</button>
                                    </div>
                                </div>
                            </form>
                            @endforeach
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