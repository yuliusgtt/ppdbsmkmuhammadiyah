<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalonSiswa extends Model
{
    protected $table = 'calon_siswa';

    protected $primaryKey = 'nomor_pendaftaran';

    public $incrementing = false;

    protected $fillable =[
        'nomor_pendaftaran',
        'id_user',
        'nama',
        'foto',
        'id_jurusan',
        'sekolah_asal',
        'nomor_telepon',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'nama_orang_tua',
        'id_jenis_kelamin',
        'tahun_lulus',
        'b_ind',
        'b_ing',
        'mtk',
        'ipa',
        'id_status_calon_siswa'
    ];

    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }

    public function jeniskelamin(){
        return $this->belongsTo(JenisKelamin::class,'id_jenis_kelamin','id');
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class,'id_jurusan', 'id');
    }

    public function status(){
        return $this->belongsTo(StatusCalonSiswa::class,'id_status_calon_siswa','id');
    }

}
