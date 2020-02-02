<?php

namespace App;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public static function moduleLinks(){
        return DB::table('ac_module_links as ml')
                ->select('ml.module_link_name', 'ml.module_link_id', 'm.module_id', 'p.user_group_id', 'p.create_fg', 'p.read_fg', 'p.update_fg', 'p.delete_fg', 'p.active_fg')
                ->leftJoin('ac_modules as m', 'ml.module_id', '=', 'm.module_id')
                ->leftJoin('ac_permissions as p', 'ml.module_link_id', '=', 'p.module_link_id')
                ->orderBy('ml.module_link_id', 'ASC')
                ->get();
    }
    public static function checkModuleLink($userGroupId, $moduleLinkId){
        return DB::table('ac_permissions')
                ->where('user_group_id',  '=', $userGroupId)
                ->where('module_link_id', '=', $moduleLinkId)
                ->first();
    }
}
