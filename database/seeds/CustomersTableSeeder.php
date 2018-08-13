<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <= 11 ; $i++) { 
        	DB::table('customers')->insert([
            'category' => 'လက္စြပ္',
            'kyat' => 1,
            'pae' => 5,
            'yway' => 0,
            'loan' => 100000,
            'customer_name' => 'ေ၀ယံ',
            'customer_address' => 'လွည္းကူး',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        }

        for ($i=0; $i <= 9 ; $i++) { 
            DB::table('customers')->insert([
            'category' => 'ဆြဲၾကိဳး',
            'kyat' => 1,
            'pae' => 5,
            'yway' => 0,
            'loan' => 50000,
            'customer_name' => 'ေ၀ေ၀',
            'customer_address' => 'လိႈင္',
            'created_at'=> '2018-08-12 07:43:48',
            'updated_at'=> '2018-08-12 07:43:48',
        ]);
        }

        for ($i=0; $i <= 8 ; $i++) { 
            DB::table('customers')->insert([
            'category' => 'လက္ေကာက္',
            'kyat' => 1,
            'pae' => 5,
            'yway' => 0,
            'loan' => 80000,
            'customer_name' => 'ေအာင္ေအာင္',
            'customer_address' => 'လမ္းမေတာ္',
            'created_at'=> '2018-08-11 07:43:48',
            'updated_at'=> '2018-08-11 07:43:48',
        ]);
        }

        for ($i=0; $i <= 13 ; $i++) { 
            DB::table('customers')->insert([
            'category' => 'ေရႊတံုး',
            'kyat' => 1,
            'pae' => 5,
            'yway' => 0,
            'loan' => 70000,
            'customer_name' => 'ေ၀ေအာင္',
            'customer_address' => 'သမိုင္း',
            'created_at'=> '2018-08-10 07:43:48',
            'updated_at'=> '2018-08-10 07:43:48',
        ]);
        }
    }
}
