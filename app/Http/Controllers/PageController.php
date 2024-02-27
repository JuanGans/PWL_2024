<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Nama : Juan Felix Antonio Nathan Tote<br>NIM : 2241720042';
    }

    public function articles($id)
    {
        return "Halaman Artikel dengan Id $id";
    }
}
