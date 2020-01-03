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
    public static function customerOrders($customerId){
        return DB::table('ordermst')
            ->where('customer_id', $customerId)
            ->where('order_status', '!=', 'D')
            ->get();
    }
    public static function ordersReceived($customerId){
        return DB::table('ordermst')
            ->where('customer_id', $customerId)
            ->where('order_status', '=', 'D')
            ->get();
    }
}
