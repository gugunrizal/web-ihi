<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\FotoBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function tampilBerita()
    {
        $berita = Berita::select('*')
            ->orderBy('tanggal_rilis', 'desc')
            ->get();
        return view('admin.berita', ['berita' => $berita]);
    }

    public function tampilFormTambah()
    {
        return view('admin.tambahBerita');
    }

    public function tambahBerita(Request $request)
    {
        $request->validate([
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // $file = $request->gambar_berita;
        $nama_file = time() . "_" . $request->gambar->getClientOriginalName();
        $file = $request->gambar->storeAs('gambar_berita', $nama_file, 'public_html');
        // $request->gambar->move(public_path('/img/foto_berita'), $nama_file);
        $berita = $request->isi;
        // $isi = htmlspecialchars($berita, ENT_QUOTES, 'UTF-8');
        $slug = Str::slug($request->judul);

        Berita::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tanggal_rilis' => $request->tanggal_rilis,
            'slug' => $slug,
            'ringkasan_berita' => $request->ringkasan,
            'isi_berita' => $berita,
            'status' => $request->status,
            'gambar_berita' => $file,
            'kategori' => $request->kategori
        ]);
        // dd($data);

        return redirect()->route('tampilBerita')->with('success', 'Berhasil Berhasil disimpan');
    }

    public function tampilFormEdit($id)
    {
        $berita = Berita::select('*')
            ->where('id', $id)
            ->get();

        return view('admin.editBerita', ['berita' => $berita]);
    }

    public function editBerita(Request $request)
    {
        $request->validate([
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // $nama_file = time() . "_" . $request->gambar->getClientOriginalName();
        // $request->gambar->move(public_path('/img/foto_berita'), $nama_file);
        $nama_file = time() . "_" . $request->gambar->getClientOriginalName();
        $file = $request->gambar->storeAs('gambar_berita', $nama_file, 'public_html');

        Berita::where('id', $request->id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tanggal_rilis' => $request->tanggal_rilis,
            // 'slug' => $request->slug,
           // 'isi_berita' => $request->isi,
            'ringkasan_berita' => $request->ringkasan,
            'status' => $request->status
            // 'gambar_berita' => $file
        ]);

        return redirect()->route('tampilBerita');
    }

    public function hapusBerita(Request $request)
    {
        Berita::where('id', $request->id)->delete();

        return redirect()->route('tampilBerita');
    }

    public function tampilFotoBerita()
    {
        $fotoBerita = FotoBerita::select('*')->get();
        return view('admin.fotoBerita', compact('fotoBerita'));
        // return view('admin.fotoBerita', ['foto_berita' => $fotoBerita]);
    }

    public function tampilFormTambahFoto()
    {
        return view('admin.tambahFotoBerita');
    }

    public function tambahFotoBerita(Request $request)
    {
        $request->validate([
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $nama_file = time() . "_" . $request->gambar->getClientOriginalName();
        $file = $request->gambar->storeAs('gambar_berita', $nama_file, 'dokumentasi_berita');

        FotoBerita::create([
            'deskripsi' => $request->deskripsi,
            'gambar' => $file,
            'link' => url()
        ]);

        return redirect()->route('tampilFotoBerita')->with('success', 'Berhasil Berhasil disimpan');
    }
}
