<?php

namespace App;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public static function moduleLinks(){
        return DB::table('ac_module_links as ml')
            ->leftJoin('ac_modules as m', 'ml.module_id', '=', 'm.module_id')
            ->leftJoin('ac_permissions as p', 'ml.module_link_id', '=', 'p.module_link_id')
            ->get();
    }
}
