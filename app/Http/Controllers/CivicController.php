<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CivicController extends Controller
{
    public function tampil()
    {
        return view('civic-edu.index');
    }
}
