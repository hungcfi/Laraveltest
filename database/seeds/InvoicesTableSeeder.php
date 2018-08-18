<?php

use Illuminate\Database\Seeder;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('invoices')->insert([
       		[
                'invoice_num' => 'HD01',
                'date_of_sale' => date('Y-m-d'),
                'good_id' => 1,
                'customer_id' => 1,
                'amount'=>24,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'invoice_num' => 'HD02',
                'date_of_sale' => date('Y-m-d'),
                'good_id' => 2,
                'customer_id' => 3,
                'amount'=>32,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'invoice_num' => 'HD03',
                'date_of_sale' => date('Y-m-d'),
                'good_id' => 3,
                'customer_id' => 4,
                'amount'=>12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'invoice_num' => 'HD04',
                'date_of_sale' => date('Y-m-d'),
                'good_id' => 4,
                'customer_id' => 2,
                'amount'=>24,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'invoice_num' => 'HD05',
                'date_of_sale' => date('Y-m-d'),
                'good_id' => 2,
                'customer_id' => 2,
                'amount'=>24,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],


       ]); 
    }
}
