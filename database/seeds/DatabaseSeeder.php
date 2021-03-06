<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(JurusanTableSeeder::class);
        $this->call(JenisKelaminTableSeeder::class);
        $this->call(StatusCalonSiswaTableSeeder::class);
    }
}
