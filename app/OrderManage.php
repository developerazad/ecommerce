<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class OrderManage extends Model
{
    public static function pendingOrders(){
        return DB::table('ordermst')->where('order_status', '=', 'P')->get();
    }
}
