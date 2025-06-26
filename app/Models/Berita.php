<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'penulis',
        'tanggal_rilis',
        'slug',
        'isi_berita',
        'ringkasan_berita',
        'gambar_berita',
        'status'
    ];
}
