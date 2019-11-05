<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Module extends Model
{
    public static function modules(){
        return DB::table('ac_modules')->get();
    }
    public static function insert($data){
        return DB::table('ac_modules')->insert($data);
    }
    public static function module($id){
        return DB::table('ac_modules')->where('module_id', $id)->first();
    }
    public static function updateModule($data, $id){
        return DB::table('ac_modules')->where('module_id', $id)->update($data);
    }
    public static function deleteModule($id){
        return DB::table('ac_modules')->where('module_id', $id)->delete();
    }
}
