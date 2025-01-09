<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'seller_id' => 1,
            'brand_id' => 3,
            'category_id' => 5,
            'status_id' => 2,
            'name' => 'ウォッシャブルテーラードジャケットSW',
            'image' => '../image/ウォッシャブルテーラードジャケットSW.png',
            'detail' =>
            '色：黒
            サイズ：Ｍ

            即日発送いたします。',
            'price' => '2990',
        ]);

        Item::create([
            'seller_id' => 1,
            'brand_id' => 4,
            'category_id' => 10,
            'status_id' => 2,
            'name' => 'サテンスカート',
            'image' => '../image/サテンスカート.png',
            'detail' =>
            '色：紺
            サイズ：Ｍ

            即日発送いたします',
            'price' => '1990',
        ]);

        Item::create([
            'seller_id' => 1,
            'brand_id' => 4,
            'category_id' => 3,
            'status_id' => 4,
            'name' => 'ジャンプスーツ',
            'image' => '../image/ジャンプスーツ.png',
            'detail' =>
            '色：黒
            サイズ：Ｌ

            即日発送いたします',
            'price' => '999',
        ]);

        Item::create([
            'seller_id' => 2,
            'brand_id' => 1,
            'category_id' => 11,
            'status_id' => 2,
            'name' => 'ショルダーパッドノースリーブワンピース',
            'image' => '../image/ショルダーパッドノースリーブワンピース.jpg',
            'detail' =>
            '色：白地に黒のストライプ
            サイズ：Ｌ

            即日発送いたします',
            'price' => '3000',
        ]);

        Item::create([
            'seller_id' => 2,
            'brand_id' => 2,
            'category_id' => 9,
            'status_id' => 3,
            'name' => 'ストレートパンツyumi',
            'image' => '../image/ストレートパンツyumi.png',
            'detail' =>
            '色：白
            サイズ：Ｍ

            即日発送いたします',
            'price' => '890',
        ]);

        Item::create([
            'seller_id' => 3,
            'brand_id' => 1,
            'category_id' => 8,
            'status_id' => 1,
            'name' => 'ダブルブレストブレザー',
            'image' => '../image/ダブルブレストブレザー.jpg',
            'detail' =>
            '色：黒
            サイズ：Ｓ

            即日発送いたします',
            'price' => '4500',
        ]);

        Item::create([
            'seller_id' => 3,
            'brand_id' => 3,
            'category_id' => 2,
            'status_id' => 3,
            'name' => 'ワイド・バレルレッグ',
            'image' => '../image/ワイド・バレルレッグ.png',
            'detail' =>
            '色：グレー
            サイズ：Ｍ

            即日発送いたします',
            'price' => '1500',
        ]);
    }
}
