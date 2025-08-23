<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function tampil()
    {
        $kategori = ['GROW', 'GLI'];
        $berita = Berita::select('*')
            ->whereIn('kategori', $kategori)
            ->get();
        return view('green-leader.index', ['berita' => $berita]);
    }

    public function tampilBeritaGLI($id)
    {
        $berita = Berita::select('*')
            ->where('id', $id)
            ->get();

        $kategori = ['GROW', 'GLI'];
        $beritaFull = Berita::select('*')
            ->whereIn('kategori', $kategori)
            ->get();

        return view('green-leader.berita_gli', [
            'berita' => $berita,
            'beritaFull' => $beritaFull
        ]);
    }
}
