<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_category_name'
    ];
    
    public static function getsubservices($id){
        
        return $data=ServiceSubCategory::where('catid',$id)->orderBy('sr_no', 'asc')->get();
    }
}
