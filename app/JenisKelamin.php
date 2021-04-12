<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
    protected $table = 'jenis_kelamin';

    protected $fillable = [
        'jenis_kelamin',
    ];
}
