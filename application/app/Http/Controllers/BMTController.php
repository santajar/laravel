<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bmt;
use App\Models\Anggota;
use App\Models\Peserta;

use Validator;

class BMTController extends Controller
{

    // public function __construct()
    // {
    //   $this->middleware('auth');
    // }

    public function daftarBMT()
    {
      $getBMT = Bmt::get();

      return view('pages.data-bmt.daftarBMT', compact('getBMT'));
    }

    public function daftarBMTAdd()
    {
      return view('pages.data-bmt.daftarBMTAdd');
    }

    public function daftarBMTStore(Request $request)
    {
      $message = [
        'NIK_BMT.required' => 'harap isi field ini',
        'NIK_BMT.unique' => 'NIK Sudah Dipakai',
        'NAMA_BMT.required' => 'harap isi field ini',
        'ALAMAT_BMT.required' => 'harap isi field ini',
        'NO_ANGGOTA_BMT.required' => 'harap isi field ini',
        'MPD.required' => 'harap isi field ini',
        'MPW.required' => 'Wharap isi field ini',
        'NO_TELPON.required' => 'harap isi field ini',
        'NAMA_KONTAK.required' => 'harap isi field ini',
        'NOMOR_KONTAK.required' => 'harap isi field ini',
      ];

      $validator = Validator::make($request->all(), [
        'NIK_BMT' => 'required|unique:taawun_data_bmt',
        'NAMA_BMT' => 'required',
        'ALAMAT_BMT' => 'required',
        'NO_ANGGOTA_BMT' => 'required',
        'MPD' => 'required',
        'MPW' => 'required',
        'NO_TELPON' => 'required',
        'NAMA_KONTAK' => 'required',
        'NOMOR_KONTAK' => 'required',
      ], $message);

      if($validator->fails())
      {
        return redirect()->route('daftar.bmtadd')->withErrors($validator)->withInput();
      }

      $set = new Bmt;
      $set->NIK_BMT   = $request->NIK_BMT;
      $set->NAMA_BMT  = $request->NAMA_BMT;
      $set->ALAMAT_BMT  = $request->ALAMAT_BMT;
      $set->NO_ANGGOTA_BMT  = $request->NO_ANGGOTA_BMT;
      $set->MPD = $request->MPD;
      $set->MPW = $request->MPW;
      $set->NO_TELPON  = $request->NO_TELPON;
      $set->NAMA_KONTAK = $request->NAMA_KONTAK;
      $set->NOMOR_KONTAK  = $request->NOMOR_KONTAK;
      $set->save();

      return redirect()->route('daftar.bmt')->with('berhasil', 'Berhasil Menambah Data BMT.');

    }

    public function daftarBMTUbah($NIK_BMT)
    {
      $getData = Bmt::where('NIK_BMT', '=', $NIK_BMT)->first();

      return view('pages.data-bmt.daftarBMTEdit', compact('getData'));
    }

    public function daftarBMTEdit(Request $request)
    {
      $get = Bmt::find($request->id);
      $get->NAMA_BMT  = $request->NAMA_BMT;
      $get->ALAMAT_BMT  = $request->ALAMAT_BMT;
      $get->NO_ANGGOTA_BMT  = $request->NO_ANGGOTA_BMT;
      $get->MPD = $request->MPD;
      $get->MPW = $request->MPW;
      $get->NO_TELPON  = $request->NO_TELPON;
      $get->NAMA_KONTAK = $request->NAMA_KONTAK;
      $get->NOMOR_KONTAK  = $request->NOMOR_KONTAK;
      $get->update();

      return redirect()->route('daftar.bmt')->with('berhasil', 'Berhasil Merubah Data BMT.');
    }
}
