<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('customers')->insert([
            ['id' => 1, 'cus_name' => 'Hải Vân'],
            ['id' => 2, 'cus_name' => 'Bình Minh'],
            ['id' => 3, 'cus_name' => 'Phong Vũ'],
            ['id' => 4, 'cus_name' =>'Phi Long']
        ]);
        
    }
}
