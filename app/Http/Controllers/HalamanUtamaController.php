<?php

namespace App\Http\Controllers;

use App\Models\chef;
use App\Models\produk;
use Illuminate\Http\Request;

class HalamanUtamaController extends Controller
{
    public function index()
    {
        $produk = produk::all();
        $chef = chef::all();
        return view('utama.index', [
            "produk" => $produk,
            "chef" => $chef,
        ]);
    }
}
