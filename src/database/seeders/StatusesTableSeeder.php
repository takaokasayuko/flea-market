<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'name' => '新品、未使用',
        ]);
        Status::create([
            'name' => '良好',
        ]);
        Status::create([
            'name' => '傷や汚れあり',
        ]);
        Status::create([
            'name' => '状態が悪い',
        ]);
    }
}
