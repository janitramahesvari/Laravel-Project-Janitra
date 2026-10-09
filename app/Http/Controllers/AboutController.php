<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
     public function index()
    {
        $nama = "Janitra Mahesvari Tungga Dewi";
        $hobi = "Mendengarkan Musik";
        $github = "https://github.com/janitramahesvari";

        return view('admin.about', [
            'nama' => $nama,
            'hobi' => $hobi,
            'github' => $github
        ]);
    }
}
