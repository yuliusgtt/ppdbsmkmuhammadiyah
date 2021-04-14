<?php

use Illuminate\Database\Seeder;

class StatusCalonSiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_calon_siswa')->insert([
            'id' => 1,
            'status' => 'DIPROSES',
        ]);

        DB::table('status_calon_siswa')->insert([
            'id' => 2,
            'status' => 'DITERIMA',
        ]);

        DB::table('status_calon_siswa')->insert([
            'id' => 3,
            'status' => 'TIDAK DITERIMA',
        ]);
    }
}
