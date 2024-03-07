<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Admin::create([
            "name" => 'Admin',
            "email" => 'christopherjen@yopmail.com',
            "password" => bcrypt('christopherjen@123'),
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]);
        // $admin = [
        //     "name" => 'Admin',
        //     "email" => 'christopherjen@yopmail.com',
        //     "password" => bcrypt('christopherjen@123'),
        //     "created_at" =>  date('Y-m-d H:i:s'),
        //     "updated_at" => date('Y-m-d H:i:s')
        //     ];
        //     Admin::create($admin);
    }
}
