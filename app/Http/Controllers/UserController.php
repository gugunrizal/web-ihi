<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\alert;

class UserController extends Controller
{
    public function index()
    {
        $berita = Berita::select('*')
            ->where('status', 'publish')
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

        return view('index', ['berita' => $berita]);
    }

    public function tampilAllBerita()
    {
        $berita = Berita::select('*')->get();
        return view('allBerita', ['berita' => $berita]);
    }

    public function tampilBeritaById($slug)
    {
        $berita = Berita::select('*')
            ->where('slug', $slug)
            ->get();
        $beritaFull = Berita::select('*')->limit(10)->get();
        // $berita = html_entity_decode($berita);
        // $berita = strip_tags($berita);
        // $allowedTags = '<p><a><strong><em><ul><ol><li><h1><h2><h3><h4><h5><h6><div><span><br><hr><img><table><tr><td><th>';
        // $berita = strip_tags(htmlspecialchars_decode($berita), $allowedTags);
        // return 
        return view('tampilBerita', ['berita' => $berita, 'beritaFull' => $beritaFull]);
    }

    public function tampilTim()
    {
        return view('tim');
    }

    public function tampilAbout()
    {
        return view('about');
    }

    public function tampil()
    {
        if (Auth::check()) {
            return redirect()->route('tampilHome');
        } else {
            return view('admin.login');
        }
    }

    public function login(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];

        if (Auth::Attempt($data)) {
            return redirect()->route('tampilHome')->with('success', 'Login Berhasil!');
            // return view('admin.home',  ['user' => $data])->with('success', 'Login Berhasil!');
        } else {
            return redirect()->route('login')->with('error', 'Username atau Password Salah!');
        }
    }

    public function tampilHome()
    {
        // $this->login();
        // $data = User::select('*')->get();
        $beritaPublish = Berita::select('status')->where('status', 'publish')->count();
        $beritaArchive = Berita::select('status')->where('status', 'archive')->count();
        $beritaDraft = Berita::select('status')->where('status', 'draft')->count();

        return view('admin.home', compact('beritaPublish', 'beritaArchive', 'beritaDraft'));
        // return view('admin.home', ['user' => $data], compact('beritaPublish', 'beritaArchive', 'beritaDraft'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
