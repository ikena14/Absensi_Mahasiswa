<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\User::create([
            "name" => "Dosen",
            "email" => "dosen@gmail.com",
            "password" => \Hash::make("dosen")
        ]);
        \App\Models\User::create([
            "name" => "Mahasiswa",
            "email" => "mahasiswa@gmail.com",
            "password" => \Hash::make("mahasiswa")
        ]);
    }
}
