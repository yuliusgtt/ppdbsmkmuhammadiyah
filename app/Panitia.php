<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panitia extends Model
{
    protected $table='panitia';

    protected $fillable=[
        'id_user',
        'nama',
        'nomor_telepon',
        'alamat',
        'id_jenis_kelamin',
    ];

    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }

    public function jeniskelamin(){
        return $this->belongsTo(JenisKelamin::class,'id_jenis_kelamin','id');
    }
}
