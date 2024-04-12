<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Mahasiswa::class; 
    
    public function definition(): array
    {
        return [
            'nim' => $this->faker->unique()->numerify('############'),
            'nama' => $this->faker->name,
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'tempat_lahir' => $this->faker->city,
            'tgl_lahir' => $this->faker->date,
            'alamat' => $this->faker->address,
            'no_telp' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->colorName.'@umrah.ac.id'
        ];
    }
}
