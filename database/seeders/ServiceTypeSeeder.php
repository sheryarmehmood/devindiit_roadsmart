<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceType;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // add countries_list to DB once table will create
        $ServiceType = array(
             array(
                "service_type" => 'Brake Safety Inspection'
            ),
             array(
                "service_type" => 'Pad and Motar Replacement'
            ),
             array(
                "service_type" => 'Pad Replacement'
            ),
             array(
                "service_type" => 'Shoe Replacement'
            ),
             array(
                "service_type" => 'Clean and Adjust'
            ),
             array(
                "service_type" => 'Other'
            )
        );
        ServiceType::insert($ServiceType);
	}
}
