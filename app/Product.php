<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Product extends Model
{
    // product list
    public static function products(){
        return DB::table('products as p')
            ->select('p.*','c.*','m.*')
            ->leftJoin('categories as c','p.category_id','=','c.category_id')
            ->leftJoin('manufactures as m','p.manufactures_id','=','m.manufactures_id')
            ->get();

    }
    public static function insert($data){
        return DB::table('products')->insert($data);
    }
    public static function product($id){
        return DB::table('products')->where('product_id','=', $id)->first();
    }
    public static function updateProduct($data,$id){
        return DB::table('products')->where('product_id','=', $id)->update($data);
    }
    public static function deleteProduct($id){
        return DB::table('products')->where('product_id', $id)->delete();
    }
}
