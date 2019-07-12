<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table = "data_mobil";

    protected $fillable = ['nama_mobil', 'harga_sewa', 'keterangan', 'file'];
}
