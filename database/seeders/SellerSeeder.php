<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sellers')->insert([
            'first_name' => 'seller4',
            'last_name' => 'user4',
             'email' => 'primaryseller4@yopmail.com',
            'password' => Hash::make('Seller@123@#'),
        ]);
    }
}
