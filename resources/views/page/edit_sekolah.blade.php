@extends('../layout/main')
@section('title', 'Edit Data Sekolah | Aplikasi Data PTK')
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
                    <div>Edit
                        <div class="page-title-subheading">Edit Data Sekolah.
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Form Edit Data Sekolah</div>
                    <div class="table-responsive">
                        <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
                            
                            <form action="{{url('/datasekolah')}}" method="post">
                                @csrf
                                @method('patch')
                                <div class="position-relative form-group">
                                    <label>NPSN</label>
                                    <input name="npsn" value="{{$data['npsn']}}" readonly="readonly" type="number" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label>Nama Sekolah</label>
                                    <input name="nama_sekolah" value="{{$data['nama_sekolah']}}" type="text" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" name="alamat">{{$data['alamat']}}</textarea>
                                </div>
                                <div class="position-relative form-group">
                                    <label class="">Desa/Kelurahan</label>
                                    <input name="desa" value="{{$data['desa']}}" type="text" class="form-control" required="required">

                                </div>
                                <div class="position-relative form-group">
                                    <label class="">Kecamatan</label>
                                    <input name="kecamatan" value="{{$data['kecamatan']}}" type="text" class="form-control" required="required">
                                </div>
                                <div class="position-relative form-group">
                                    <label class="">Jenjang Sekolah</label>
                                    <select name="jenjang" class="form-control" required="required">
                                        <option value="tk" @if($data['jenjang'] == "TK") selected="selected" @endif>TK</option>
                                        <option value="sd" @if($data['jenjang'] == "SD") selected="selected" @endif>SD</option>
                                        <option value="smp" @if($data['jenjang'] == "SMP") selected="selected" @endif>SMP</option>
                                        <option value="sma" @if($data['jenjang'] == "SMA") selected="selected" @endif>SMA</option>
                                    </select>
                                </div>
                                <div class="position-relative form-group">
                                    <label class="">Status Sekolah</label>
                                    <select name="status" class="form-control" required="required">
                                        <option value="negeri" @if($data['status'] == "NEGERI") selected="selected" @endif>Negeri</option>
                                        <option value="swasta" @if($data['status'] == "SWASTA") selected="selected" @endif>Swasta</option>
                                    </select>
                                </div>

                                <button type="submit" class="mt-2 btn btn-primary">Edit</button>
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