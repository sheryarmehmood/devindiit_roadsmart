<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\permissions;

class UserPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //adding values
        $permissions_list = array(
            array(
                "parent" => "Requests",
                "child" => "request_add",
                "child_full_Show" => "Add",
                "type"=>'check'
            ),
            array(
                "parent" => "Requests",
                "child" => "request_edit",
                "child_full_Show" => "Edit",
                "type"=>'check'
            ),
            array(
                "parent" => "Requests",
                "child" => "request_delete",
                "child_full_Show" => "Delete",
                "type"=>'check'
            ),
            array(
                "parent" => "Orders",
                "child" => "order_add",
                "child_full_Show" => "Add",
                "type"=>'check'
            ),
            array(
                "parent" => "Orders",
                "child" => "order_edit",
                "child_full_Show" => "Edit",
                "type"=>'check'
            ),array(
                "parent" => "Orders",
                "child" => "order_delete",
                "child_full_Show" => "Delete",
                "type"=>'check'
            ),
            array(
                "parent" => "Products",
                "child" => "product_add",
                "child_full_Show" => "Add",
                "type"=>'check'
            ),
            array(
                "parent" => "Products",
                "child" => "product_edit",
                "child_full_Show" => "Edit",
                "type"=>'check'
            ),array(
                "parent" => "Products",
                "child" => "product_delete",
                "child_full_Show" => "Delete",
                "type"=>'check'
            ),array(
                "parent" => "Services",
                "child" => "service_add",
                "child_full_Show" => "Add",
                "type"=>'check'
            ),
            array(
                "parent" => "Services",
                "child" => "service_edit",
                "child_full_Show" => "Edit",
                "type"=>'check'
            ),array(
                "parent" => "Services",
                "child" => "service_delete",
                "child_full_Show" => "Delete",
                "type"=>'check'
            ),
            

        );
        permissions::insert($permissions_list);
    
}
}



