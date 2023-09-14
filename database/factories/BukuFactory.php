<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Buku;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->words(2, true),
            'penulis' => $this->faker->name(),
            'harga' => $this->faker->numerify('###000'),
            'tgl_terbit' => $this->faker->date('Y-m-d')
        ];
    }
}
