<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        $this->call(CategoriesTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
    }
}
