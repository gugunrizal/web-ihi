<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class CivicController extends Controller
{
    public function tampil()
    {
        $berita = Berita::select('*')
            ->where('kategori', 'CIVIC')
            ->orderBy('tanggal_rilis', 'desc')
            ->get();

        return view('civic-edu.index', ['berita' => $berita]);
    }
    
    public function tampilBeritaCivic($slug)
    {
        $berita = Berita::select('*')
            ->where('slug', $slug)
            ->orderBy('tanggal_rilis', 'desc')
            ->get();

        $kategori = ['CIVIC'];
        $beritaFull = Berita::select('*')
            ->whereIn('kategori', $kategori)
            ->orderBy('tanggal_rilis', 'desc')
            ->get();

        return view('civic-edu.berita_civic', [
            'berita' => $berita,
            'beritaFull' => $beritaFull
        ]);
    }
}
