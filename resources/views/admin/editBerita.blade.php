@extends('admin.master')
@section('title', 'IHI | Tambah Berita')
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
                <h1 class="h3 mb-0 text-gray-800"><b>Edit Berita</b></h1>
            </div>
            @foreach ($berita as $b)

            <form action="{{route('editBerita', $b->id)}}" class="form-group" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Berita</label>
                    <input type="text" name="judul" class="form-control form-control-sm" id="judul" value="{{$b->judul}}">
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis Berita</label>
                    <input type="text" name="penulis" class="form-control form-control-sm" id="penulis" value="{{$b->penulis}}">
                </div>
                <div class="mb-3">
                    <label for="tanggal_rilis" class="form-label">Tanggal Rilis</label>
                    <input type="date" name="tanggal_rilis" class="form-control form-control-sm" id="tanggal_rilis" value="{{$b->tanggal_rilis}}"">
                </div>
                <div class=" mb-3">
                    <!-- <label for="slug" class="form-label">Slug</label> -->
                    <input type="hidden" name="slug" class="form-control form-control-sm" id="slug" value="{{$b->slug}}">
                </div>
                <div class="mb-3">
                    <label for="ringkasan" class="form-label">Ringkasan Berita</label>
                    <textarea class="form-control form-control-sm" name="ringkasan" id="ringkasan" rows="3">{{$b->ringkasan_berita}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Berita</label>
                    <textarea class="form-control form-control-sm" name="isi" id="isi" rows="3">{{$b->isi_berita}}</textarea>
                </div>
                <div class=" mb-3">
                    <label for="gambar" class="form-label">Gambar Berita</label> <br>
                    <img src="{{asset('/img/foto_berita/'.$b->gambar_berita)}}" alt="" width="100px">
                    <input type="file" name="gambar" id="gambar" class="form-control form-control-sm">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status Berita</label>
                    <select class="form-select form-control form-control-sm" aria-label="Default select example" name="status" id="status">
                        <option selected>Pilih Status</option>
                        <option value="publish">Publish</option>
                        <option value="draft">Draft</option>
                        <option value="archive">Archive</option>
                    </select>
                </div>
                @endforeach

                <div class="mb-3">
                    <a href="{{route('tampilBerita')}}" class="btn btn-danger btn-sm">Kembali</a>
                    <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection