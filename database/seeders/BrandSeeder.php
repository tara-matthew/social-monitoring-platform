<?php

namespace Database\Seeders;

use Database\Factories\BrandFactory;
use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::factory(10)->create();
    }
}
