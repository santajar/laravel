<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function home()
    {
      return view('pages.home');
    }

    public function daftarBMT()
    {
      return view('pages.transaksi.daftarBMT');
    }

    public function daftarBMTAdd()
    {
      return view('pages.transaksi.daftarBMTAdd');
    }
}
