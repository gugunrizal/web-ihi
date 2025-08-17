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
            ->get();

        return view('civic-edu.index', ['berita' => $berita]);
    }
}
