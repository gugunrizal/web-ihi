@extends('admin.master')
@section('title', 'IHI | Tambah Foto Berita')
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
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><b>Tambah Foto Berita</b></h1>
            </div>
            <form action="{{route('tambahFotoBerita')}}" class="form-group" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Foto Berita</label>
                    <input type="text" name="deskripsi" class="form-control form-control-sm" id="deskripsi" placeholder="Masukkan Deskripsi Foto Berita">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar Berita</label>
                    <input type="file" name="gambar" id="gambar" class="form-control form-control-sm">
                </div>
                <div class="mb-3">
                    <a href="{{route('tampilBerita')}}" class="btn btn-danger btn-sm">Kembali</a>
                    <button class="btn btn-primary btn-sm" type="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection