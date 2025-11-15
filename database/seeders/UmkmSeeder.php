<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Category::firstOrCreate(['name'=>'makanan']);
        \App\Models\Category::firstOrCreate(['name'=>'minuman']);
        \App\Models\Category::firstOrCreate(['name'=>'jasa']);
        \App\Models\Category::firstOrCreate(['name'=>'lainnya']);

        \App\Models\Umkm::factory()->count(20)->create();
    }

}
