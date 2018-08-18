<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->insert([
            ['id' => 1, 'good_name' => 'Iphone 5S'],
            ['id' => 2, 'good_name' => 'Galaxy S8'],
            ['id' => 3, 'good_name' => 'Nokia 76'],
            ['id' => 4, 'good_name' => 'Blackberry']
        ]);
    }
}
