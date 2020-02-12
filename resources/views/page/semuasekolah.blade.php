@extends('../layout/main')
@section('title', 'Data Sekolah | Aplikasi Data PTK')
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
                    <div>Data Sekolah
                        <div class="page-title-subheading">Data Seluruh Sekolah.
                        </div>
                    </div>
                </div> 
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                        <button type="button" class="btn-shadow btn btn-info" data-toggle="modal" data-target="#tambahdatasekolah">Tambah Data Sekolah</button>
                    </div>
                </div>   
            </div>
        </div>

        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{session('status')}}.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <!-- Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Data Sekolah</div>
                    <div class="table-responsive">
                        <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
                            <table id="example1" class="table table-striped table-bordered data">
                                <thead>
                                    <tr>            
                                        <th>No</th>
                                        <th>NPSN</th>
                                        <th>Nama Sekolah</th>
                                        <th>Alamat</th>
                                        <th>Jenjang</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datasekolah as $datas)
                                    <tr>                
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$datas->npsn}}</td>
                                        <td>{{$datas->nama_sekolah}}</td>
                                        <td>{{$datas->alamat}}</td>
                                        <td>{{$datas->jenjang}}</td>
                                        <td>{{$datas->status}}</td>
                                        <td>
                                            <a href="{{url('/datasekolah/'.$datas->npsn)}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                            <a onclick="return confirm('Data akan dihapus!')" href="{{url('/datasekolah/delete/'.$datas->npsn)}}"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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

<!-- Modal dialog tambah data sekolah -->
<div class="modal fade" id="tambahdatasekolah" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Sekolah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('/datasekolah')}}" method="post">
                    @csrf
                    <div class="position-relative form-group">
                        <label class="">NPSN</label>
                        <input name="npsn" type="number" placeholder="Masukkan NPSN" class="form-control" required="required">
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Nama Sekolah</label>
                        <input name="nama_sekolah" placeholder="Masukkan Nama Sekolah" type="text" class="form-control" required="required">
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Alamat</label>
                        <textarea name="alamat" class="form-control" required="required"></textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Jenjang Sekolah</label>
                        <select name="jenjang" class="form-control" required="required">
                            <option value="tk">TK</option>
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sma">SMA</option>
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label class="">Status Sekolah</label>
                        <select name="status" class="form-control" required="required">
                            <option value="negeri">Negeri</option>
                            <option value="swasta">Swasta</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End modal dialog -->