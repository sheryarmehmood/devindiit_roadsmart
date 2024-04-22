<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        SellerSeeder::class,
        ServiceCategorySeeder::class,
        ServiceSubCategorySeeder::class,
        ServiceTypeSeeder::class,
        UserPermission::class,
        AdminSeeder::class,
        NotificationSeeder::class,
        RoleSeeder::class,
        AdminSeeder::class
    	]);
    }
}
