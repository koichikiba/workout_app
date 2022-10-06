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
        $param = [[
            'name' => '胸',
        ],
        [
            'name' => '背中',
        ],
        [
            'name' => '脚',
        ],
        [
            'name' => '肩',
        ],
        [
            'name' => '腕(上腕二頭筋)',
        ],
        [
            'name' => '腕(上腕三頭筋)',
        ],
        [
            'name' => 'その他',
        ]];
        DB::table('categories')->insert($param);
    }
}
