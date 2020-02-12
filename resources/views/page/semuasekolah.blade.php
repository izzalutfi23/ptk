@extends('../layout/main')
@section('title', 'Data Sekolah | Aplikasi Data PTK')
@section('container')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-home icon-gradient bg-mean-fruit">
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
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Pekerjaan</th>
                                        <th>Usia</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>                
                                        <td>Andi</td>
                                        <td>Jakarta</td>
                                        <td>Web Designer</td>
                                        <td>21</td>
                                        <td>
                                            <a href=""><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                            <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>                
                                        <td>Malas Ngoding</td>
                                        <td>Bandung</td>
                                        <td>Web Developer</td>
                                        <td>26</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>                
                                        <td>Malas Ngoding</td>
                                        <td>Bandung</td>
                                        <td>Web Developer</td>
                                        <td>26</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>                
                                        <td>Andi</td>
                                        <td>Jakarta</td>
                                        <td>Web Designer</td>
                                        <td>21</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>                
                                        <td>Andi</td>
                                        <td>Jakarta</td>
                                        <td>Web Designer</td>
                                        <td>21</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
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
                <form action="www.facebook.com" method="post">
                    @csrf
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Email</label>
                        <input name="email" id="exampleEmail" placeholder="with a placeholder" type="email" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="examplePassword" class="">Password</label>
                        <input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleSelect" class="">Select</label>
                        <select name="select" id="exampleSelect" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
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