<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Barang;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    protected $model = Barang::class;

    public function definition(): array
    {
        return [
            'jenis' => $this->faker->name(),
            'kondisi' => $this->faker->word(),
            'keterangan' => $this->faker->paragraph(),
            'kecacatan' => $this->faker->paragraph(),
            'jumlah' => $this->faker->randomNumber(3, false),
            'gambar' => 'barangs/' . $this->faker->image('public/storage/barangs', 400, 300, null, false),
            'user_id' => $this->faker->numberBetween(1, 6)
        ];
    }
}
