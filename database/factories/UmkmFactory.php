<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Umkm;
use App\Models\Category;

class UmkmFactory extends Factory
{
    protected $model = Umkm::class;

    public function definition(): array
    {
        return [
            'category_id'   => Category::factory(), // atau random id jika sudah ada data
            'name'          => $this->faker->company(),
            'description'   => $this->faker->sentence(10),
            'primary_photo' => null, // isi manual di seeder
            'latitude'      => -6.9175 + $this->faker->randomFloat(6, -0.01, 0.01), // sekitar Bandung
            'longitude'     => 107.6191 + $this->faker->randomFloat(6, -0.01, 0.01),
        ];
    }
}
