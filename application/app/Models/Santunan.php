<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Santunan extends Model
{
    protected $table = 'taawun_santunan_anggota_bmt';

    protected $fillable = ['NO_KTP', 'TANGGAL', 'NAMA', 'ALAMAT', 'NIK_BMT', 'REKENING', 'PEMBIAYAAN', 'TGL_AKAD', 'JTH_TEMPO', 'JGK_WAKTU', 'IURAN_JIWA', 'IURAN_KEBAKARAN', 'JML_IURAN', 'PENYEBAB', 'SALDO', 'JML_SANTUNAN'];
}
