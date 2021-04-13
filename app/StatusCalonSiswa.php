<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusCalonSiswa extends Model
{
    protected $table = 'status_calon_siswa';

    protected $fillable = [
        'status',
    ];
}
