<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'フリーザ',
                'sort_order' => 1,
            ],
            [
                'name' => 'セル',
                'sort_order' => 2,
            ],
            [
                'name' => '魔人ブウ',
                'sort_order' => 3,
            ],
            ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'ギニュー',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => 'リクーム',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => 'ジース',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => 'セルジュニア',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => '17号',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => '18号',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],
            [
                'name' => 'ダーブラ',
                'sort_order' => 7,
                'primary_category_id' => 3
            ],
            [
                'name' => 'ビビディ',
                'sort_order' => 8,
                'primary_category_id' => 3
            ],
            [
                'name' => 'ヤコン',
                'sort_order' => 9,
                'primary_category_id' => 3
            ],
            ]);

    
        }
}
