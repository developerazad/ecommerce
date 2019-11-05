<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserGroup extends Model
{
    public static function groups(){
        return DB::table('ac_user_groups')->get();
    }
    public static function insert($data){
        return DB::table('ac_user_groups')->insert($data);
    }
    public static function group($id){
        return DB::table('ac_user_groups')->where('user_group_id', $id)->first();
    }
    public static function updateGroup($data, $id){
        return DB::table('ac_user_groups')->where('user_group_id', $id)->update($data);
    }
    public static function deleteGroup($id){
        return DB::table('ac_user_groups')->where('user_group_id', $id)->delete();
    }
}
