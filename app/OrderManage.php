<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class OrderManage extends Model
{
    public static function pendingOrders(){
        return DB::table('ordermst')
            ->leftJoin('customers', 'ordermst.customer_id', '=', 'customers.customer_id')
            ->where('order_status', '=', 'P')
            ->get();
    }
    public static function receivedOrders(){
        return DB::table('ordermst')
            ->leftJoin('customers', 'ordermst.customer_id', '=', 'customers.customer_id')
            ->where('order_status', '=', 'R')
            ->get();
    }
    public static function orderProcessing(){
        return DB::table('ordermst')
            ->leftJoin('customers', 'ordermst.customer_id', '=', 'customers.customer_id')
            ->where('order_status', '=', 'PR')
            ->get();
    }
    public static function deliveredOrders(){
        return DB::table('ordermst')
            ->leftJoin('customers', 'ordermst.customer_id', '=', 'customers.customer_id')
            ->where('order_status', '=', 'D')
            ->get();
    }
    public static function order($id){
        return DB::table('orderchd')->where('ordermst_id','=', $id)->get();
    }
}
