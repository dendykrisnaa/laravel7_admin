<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    //
    protected $fillable=[
        'noAkun',
        'namaAkun',
        'saldo',
    ];
}
