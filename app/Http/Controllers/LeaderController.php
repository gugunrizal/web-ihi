<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pengurus;
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

    public function tampilTimGLI()
    {
        $oc = Pengurus::where('kode', 'oc')->get();
        $weavers = Pengurus::where('kode', 'weavers')->get();
        $koreg = Pengurus::where('kode', 'koreg')->get();
        $star = Pengurus::where('kode', 'star')->get();
        $builders = Pengurus::where('kode', 'builders')->get();
        return view(
            'green-leader.tim_gli',
            [
                'oc' => $oc,
                'weavers' => $weavers,
                'koreg' => $koreg,
                'star' => $star,
                'builders' => $builders
            ]
        );
    }
}
