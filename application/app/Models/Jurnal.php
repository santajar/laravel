<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    protected $table = 'taawun_jurnal';

    protected $fillable = ['TANGGAL', 'NO_REK', 'D/K', 'KETERANGAN', 'JUMLAH'];
}
