<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'H&M',
        ]);
        Brand::create([
            'name' => 'しまむら',
        ]);
        Brand::create([
            'name' => 'GU',
        ]);
        Brand::create([
            'name' => 'ユニクロ',
        ]);
    }
}
