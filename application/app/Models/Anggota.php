<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{

    protected $table = 'taawun_data_anggota_bmt';

    protected $fillable = ['NO_KTP', 'NAMA', 'ALAMAT', 'TEMPAT_LAHIR', 'TANGGAL_LAHIR', 'LOKASI_USAHA', 'JENIS_USAHA', 'NIK_BMT'];
}
