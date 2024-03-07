<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Notifications;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Notifications::create([
            "user_id" => '7',
            "seller_id" => '1',
            "type" => 'order_place',
            "text" =>  'your order is placed'
        ]);
    }
}
