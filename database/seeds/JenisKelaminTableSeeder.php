<?php

use Illuminate\Database\Seeder;

class JenisKelaminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_kelamin')->insert([
            'id' => 1,
            'jenis_kelamin' => 'Perempuan',
        ]);

        DB::table('jenis_kelamin')->insert([
            'id' => 2,
            'jenis_kelamin' => 'Laki-laki',
        ]);
    }
}
