<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'スーパーベビー',
                'information' => 'リベンジデスボール',
                'filename' => 'sample7.jpeg',
                'is_selling' => true    
            ],
            [
                'owner_id' => 2,
                'name' => 'スーパー17号',
                'information' => '電撃地獄玉',
                'filename' => 'sample8.jpeg',
                'is_selling' => true    
            ],
            ]);
    }
}
