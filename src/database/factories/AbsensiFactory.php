<?php

namespace Database\Factories;

use App\Models\Absensi;
use Illuminate\Database\Eloquent\Factories\Factory;

class AbsensiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Absensi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "pertemuan_id"=> $this-> faker ->numberBetween(1,20),
            "mahasiswa_id" => 2,
            "status" => $this-> faker -> randomElement(['absen','hadir','izin','sakit'])
        ];
    }
}
