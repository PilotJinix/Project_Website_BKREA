<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    protected $table = 'beasiswa';

    protected $fillable = [
        'nama_beasiswa','nama_intansi', 'gambar','kuota', 'deskripsi'
    ];
}
