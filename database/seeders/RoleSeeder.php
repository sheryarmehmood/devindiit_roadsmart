<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin' , 'guard_name' => 'admin']);
        Role::create(['name' => 'vendor' , 'guard_name' => 'vendor']);
    }
}
