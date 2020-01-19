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
        return DB::table('orderchd')
            ->leftJoin('ordermst', 'orderchd.ordermst_id', '=', 'ordermst.ordermst_id')
            ->leftJoin('products', 'orderchd.product_id', '=', 'products.product_id')
            ->leftJoin('customers', 'ordermst.customer_id', '=', 'customers.customer_id')
            ->where('orderchd.ordermst_id','=', $id)
            ->get();
    }
    public static function orderStatus($id){
        return DB::table('ordermst')->where('ordermst_id', '=', $id)->first();
    }

    public static function updateStatus($data, $id){
        return DB::table('ordermst')->where('ordermst_id', '=', $id)->update($data);
    }
}
