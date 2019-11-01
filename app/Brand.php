<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Brand extends Model
{
    protected $table = 'brands';
    protected $guarded = ['brand_id'];
    public static function brands(){
        return DB::table('brands')->get();
    }
    public static function insert($data){
        return DB::table('brands')->insert($data);
    }
    public static function brand($id){
        return DB::table('brands')->where('brand_id', $id)->first();
    }
    public static function updateBrand($data, $id){
        return DB::table('brands')->where('brand_id', $id)->update($data);
    }
    public static function deleteBrand($id){
        return DB::table('brands')->where('brand_id', $id)->delete();
    }
}
