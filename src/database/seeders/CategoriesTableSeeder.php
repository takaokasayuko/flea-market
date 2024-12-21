<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fashion = Category::create([
            'name' => '洋服',
        ]);

        $mens = Category::create([
            'category_id' => $fashion->id,
            'name' => 'メンズ',
        ]);
        $ladies = Category::create([
            'category_id' => $fashion->id,
            'name' => 'レディース',
        ]);

        Category::create([
            'category_id' => $mens->id,
            'name' => 'トップス',
        ]);
        Category::create([
            'category_id' => $mens->id,
            'name' => 'ジャケット・アウター',
        ]);
        Category::create([
            'category_id' => $mens->id,
            'name' => 'パンツ',
        ]);

        Category::create([
            'category_id' => $ladies->id,
            'name' => 'トップス',
        ]);
        Category::create([
            'category_id' => $ladies->id,
            'name' => 'ジャケット・アウター',
        ]);
        Category::create([
            'category_id' => $ladies->id,
            'name' => 'パンツ',
        ]);
        Category::create([
            'category_id' => $ladies->id,
            'name' => 'スカート',
        ]);
        Category::create([
            'category_id' => $ladies->id,
            'name' => 'ワンピース',
        ]);
    }
}
