<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // add countries_list to DB once table will create
        $service = array(
             array(
                "category_name" => 'Wheels'
            ),
             array(
                "category_name" => 'Cleaning'
            ),
             array(
                "category_name" => 'Dainting'
            ),
             array(
                "category_name" => 'Painting'
            )
        );
        ServiceCategory::insert($service);
	}
}
