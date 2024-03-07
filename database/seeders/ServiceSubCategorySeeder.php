<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceSubCategory;

class ServiceSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // add countries_list to DB once table will create
        $ServiceSubCategory = array(
             array(
                "sub_category_name" => 'Brakes'
            ),
             array(
                "sub_category_name" => 'Electrical'
            ),
             array(
                "sub_category_name" => 'Engine'
            ),
             array(
                "sub_category_name" => 'Exhaust'
            )
        );
        ServiceSubCategory::insert($ServiceSubCategory);
	}
}
