<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Manufacture extends Model
{
    public static function manufactures(){
        return DB::table('manufactures')->get();
    }
    public static function insert($data){
        return DB::table('manufactures')->insert($data);
    }
    public static function manufacture($id){
        return DB::table('manufactures')->where('manufactures_id', $id)->first();
    }
    public static function updateManufacture($data, $id){
        return DB::table('manufactures')->where('manufactures_id', $id)->update($data);
    }
    public static function deleteManufacture($id){
        return DB::table('manufactures')->where('manufactures_id', $id)->delete();
    }
}
