@extends('../layout/main')
@section('title', 'Data Sekolah')
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
                        <div class="page-title-subheading">Daftar Sekolah {{strtoupper($jenjang)}} {{ucfirst($status)}}
                        </div>
                    </div>
                </div> 
            </div>
        </div>

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