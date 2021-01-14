<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

class KelasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kelas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "nama" => $this -> faker -> name,
            "matakuliah" => $this-> faker -> text(100),
            "noruang" => $this-> faker -> numerify("###"),
            "kode" => $this-> faker -> bothify("##??##??"),
            "dosen_id" => 1
        ];
    }
}
