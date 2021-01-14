<?php

namespace Database\Factories;

use App\Models\Pertemuan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PertemuanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pertemuan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "kelas_id" => 1,
            "tanggal" => $this-> faker -> date('Y-m-d',"now"),
            "pertemuan" => $this-> faker -> randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]),
            "materi" => $this-> faker ->text(100),
            "kode" => $this-> faker -> bothify("##??##??")
        ];
    }
}
