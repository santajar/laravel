<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bmt extends Model
{
    protected $table = 'taawun_data_bmt';

    protected $fillable = ['NIK_BMT', 'NAMA_BMT', 'ALAMAT_BMT', 'NO_ANGGOTA_BMT', 'MPD', 'MPW', 'NO_TELPON', 'NAMA_KONTAK', 'NOMOR_KONTAK'];
}
