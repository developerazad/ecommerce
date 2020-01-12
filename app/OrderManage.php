<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class OrderManage extends Model
{
    public static function pendingOrders(){
        return DB::table('ordermst')->where('order_status', '=', 'P')->get();
    }
    public static function order($id){
        return DB::table('orderchd')->where('ordermst_id','=', $id)->get();
    }
}
