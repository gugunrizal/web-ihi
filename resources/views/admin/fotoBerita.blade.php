@extends('admin.master')
@section('title', 'IHI | Foto Berita')
@section('content')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Content Row -->
            <div class="row">
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><b>Foto Berita Institut Hijau Indonesia</b></h1>
                        <a href="{{route('tampilFormTambahFoto')}}" class="btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Foto Berita</a>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kegiatan IHI</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Deskripsi Foto</th>
                                            <th>Gambar</th>
                                            <th>Link</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Deskripsi Foto</th>
                                            <th>Gambar</th>
                                            <th>Link</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        @foreach ($fotoBerita as $d)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$d->deskripsi}}</td>
                                            <td>
                                                <img src="{{asset('storage/'.$d->gambar)}}" alt="" width="100px">
                                            </td>
                                            <td>
                                                <?= url('/storage') . '/' . $d->gambar ?>
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
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Institut HIjau Indonesia 2025</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
@endsection