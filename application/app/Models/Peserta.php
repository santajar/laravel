<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'taawun_data_peserta';

    protected $fillable = ['NO_KTP', 'TANGGAL', 'NAMA', 'ALAMAT', 'TEMPAT_LAHIR', 'TANGGAL_LAHIR', 'LKS_USAHA', 'JENIS_USAHA', 'NIK_BMT', 'REKENING', 'PEMBIAYAAN', 'TGL_AKAD', 'JTH_TEMPO', 'JGK_WAKTU', 'IURAN_JIWA', 'IURAN_KEBAKARAN', 'JML_IURAN'];
}
