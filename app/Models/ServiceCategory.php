<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class ServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name'
    ];
    
    public static function serviceRequestsWithId($condition){
       return  $sales = DB::table('services_request')
    ->join('service_sub_categories','service_sub_categories.id', '=', 'services_request.sub_service_id')
    ->join('vehicles','vehicles.id', '=', 'services_request.vehcle_id')
    ->join('makes','makes.id', '=', 'vehicles.make_id')
    ->select('services_request.*','service_sub_categories.sub_category_name','makes.name as mname')
    ->where('services_request.userid',$condition['userid'])
    //->where('services_request.service_id',$condition['catid'])
    ->where('services_request.id',$condition['catid'])
    ->orderby('services_request.id','desc')
    ->first();   
    }
    public static function serviceRequests($condition){
        return  $sales = DB::table('services_request')
    ->join('service_sub_categories','service_sub_categories.id', '=', 'services_request.sub_service_id')
    ->join('vehicles','vehicles.id', '=', 'services_request.vehcle_id')
    ->join('makes','makes.id', '=', 'vehicles.make_id')
    ->select('services_request.*','service_sub_categories.sub_category_name','makes.name as mname')
    ->where('services_request.userid',$condition['userid'])
    ->where('services_request.service_id',$condition['catid'])
    ->orderby('services_request.id','desc')
    ->get();

        
    }
    public static function search($text){
       return $data=ServiceCategory::Where('category_name', 'like', '%' . $text . '%')->get();
    }
    public static function getQuickLinks(){
             return	$sales = DB::table('repair_categories')->get();
    }
    public static function getdetails($id){
       return $data=ServiceCategory::where('id',$id)->first(); 
    }
}
