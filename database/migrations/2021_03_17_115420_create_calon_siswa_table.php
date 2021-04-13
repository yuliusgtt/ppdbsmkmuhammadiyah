<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_siswa', function (Blueprint $table) {
            $table->string('nomor_pendaftaran')->primary();
            $table->unsignedBigInteger('id_user')->unique();
            $table->string('nama');
            $table->string('foto')->nullable();
            $table->unsignedBigInteger('id_jurusan');
            $table->string('sekolah_asal');
            $table->string('nomor_telepon',12)->unique();
            $table->string('alamat',150);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nama_orang_tua');
            $table->unsignedBigInteger('id_jenis_kelamin');
            $table->integer('tahun_lulus');
            $table->integer('b_ind');
            $table->integer('b_ing');
            $table->integer('mtk');
            $table->integer('ipa');
            $table->unsignedBigInteger('status_calon_siswa_id');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_jenis_kelamin')->references('id')->on('jenis_kelamin')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_jurusan')->references('id')->on('jurusan');
            $table->foreign('status_calon_siswa_id')->references('id')->on('status_calon_siswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calon_siswas');
    }
}
