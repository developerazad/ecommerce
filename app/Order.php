<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Order extends Model
{
    public static function insertMst($data){
        return DB::table('ordermst')->insertGetId($data);
    }
    public static function insertChd($data){
        return DB::table('orderchd')->insert($data);
    }
}
