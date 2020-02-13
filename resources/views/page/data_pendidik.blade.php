@extends('../layout/main')
@section('title', 'Data Pendidik | Aplikasi Data PTK')
@section('container')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-users icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Data Pendidik
                        <div class="page-title-subheading">Data Seluruh Pendidik.
                        </div>
                    </div>
                </div> 
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                        <a href="{{url('/datapendidik/tambah')}}"><button type="button" class="btn-shadow btn btn-info"><i class="fa fa-plus"></i> Data Sekolah</button></a>
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
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tgl Lahir</th>
                                        <th>Jenis Kel</th>
                                        <th>NPWP</th>
                                        <th>Email</th>
                                        <th width="25%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pendidik as $data)
                                    <tr>                
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->nik}}</td>
                                        <td>{{$data->nama_lengkap}}</td>
                                        <td>{{$data->tgl_lahir}}</td>
                                        <td>{{$data->j_kel}}</td>
                                        <td>{{$data->npwp}}</td>
                                        <td>{{$data->email}}</td>
                                        <td width="25%">
                                            <a href="{{url('/datapendidik/'.$data->nik)}}"><button type="button" class="btn btn-success btn-sm">Detail</button></a>
                                            <a href="{{url('/datapendidik/edit/'.$data->nik)}}"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                                            <a onclick="return confirm('Data akan dihapus!')" href="{{url('/datapendidik/delete/'.$data->nik)}}"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
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