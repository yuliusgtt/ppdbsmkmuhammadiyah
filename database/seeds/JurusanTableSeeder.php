<?php

use Illuminate\Database\Seeder;

class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
            'id' => 2,
            'jurusan' => 'AKUNTANSI',
            'kode' => 'AK',
        ]);

        DB::table('jurusan')->insert([
            'id' => 3,
            'jurusan' => 'TEKNIK KOMPUTER DAN JARINGAN',
            'kode' => 'TKJ',
        ]);

        DB::table('jurusan')->insert([
            'id' => 4,
            'jurusan' => 'ADMINISTRASI PERKANTORAN',
            'kode' => 'AP',
        ]);

        DB::table('jurusan')->insert([
            'id' => 5,
            'jurusan' => 'TEKNIK KENDARAAN RINGAN',
            'kode' => 'TKR',
        ]);

        DB::table('jurusan')->insert([
            'id' => 6,
            'jurusan' => 'TEKNIK SEPEDA MOTOR',
            'kode' => 'TSM',
        ]);
    }
}
