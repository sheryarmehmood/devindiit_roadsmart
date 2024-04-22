<?php

namespace Database\Seeders;


use \App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => 'Admin',
            "email" => 'christopherjentwo@yopmail.com',
            "password" => bcrypt('christopherjen@1234'),
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ])->assignRole('admin');
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
