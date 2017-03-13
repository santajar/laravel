<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BukuBesar extends Model
{
    protected $table = 'taawun_buku_besar';

    protected $fillable = ['NO_REK', 'KETERANGAN', 'SALDO'];
}
