<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajuan extends Model
{
    protected $table = 'ajuan_pemohon';

    protected $fillable = [
        'nama_pemohon','email_pemohon', 'no_hp_pemohon','data_pemohon','user_id','beasiswa_id'
    ];
}
