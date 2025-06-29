@extends('admin.master')
@section('title', 'IHI | Berita')
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
                        <h1 class="h3 mb-0 text-gray-800"><b>Berita Institut Hijau Indonesia</b></h1>
                        <a href="{{route('tampilFormTambah')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Berita</a>
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
                                            <th>Judul Berita</th>
                                            <th>Penulis</th>
                                            <th>Tanggal Rilis</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Gambar</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Berita</th>
                                            <th>Penulis</th>
                                            <th>Tanggal Rilis</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Gambar</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        @foreach ($berita as $b)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$b->judul}}</td>
                                            <td>{{$b->penulis}}</td>
                                            <td>{{$b->tanggal_rilis}}</td>
                                            <td>{{$b->slug}}</td>
                                            <td>{{$b->status}}</td>
                                            <td>
                                                <img src="{{asset('storage/'.$b->gambar_berita)}}" alt="" width="100px">
                                            </td>
                                            <td>
                                                <a href="{{route('hapusBerita', $b->id)}}" onclick="return confirm('Apakah Yakin?')" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                    Hapus
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{route('tampilFormEdit', $b->id)}}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                    Edit
                                                </a>
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