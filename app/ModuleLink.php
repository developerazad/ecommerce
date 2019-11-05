<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModuleLink extends Model
{
    public static function moduleLinks(){
        return DB::table('ac_module_links')->get();
    }
    public static function insert($data){
        return DB::table('ac_module_links')->insert($data);
    }
    public static function moduleLink($id){
        return DB::table('ac_module_links')->where('modlink_id', $id)->first();
    }
    public static function updateModuleLink($data, $id){
        return DB::table('ac_module_links')->where('modlink_id', $id)->update($data);
    }
    public static function deleteModuleLink($id){
        return DB::table('ac_module_links')->where('modlink_id', $id)->delete();
    }
}
