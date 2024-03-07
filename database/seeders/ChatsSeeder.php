<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Chats;
class ChatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       public function run()
    {
         \App\Models\Chats::create([
            "sender_id" => 7,
            "recevier_id" => 1,
            "message" => 'hey, how are you!',
            "seen" =>  0,
            
        ]);
           }

}
