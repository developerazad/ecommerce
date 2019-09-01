<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Product extends Model
{
    // product list
    public static function allProductList(){
        return DB::table('products as p')
            ->select('p.*','c.*','m.*')
            ->leftJoin('categories as c','p.category_id','=','c.category_id')
            ->leftJoin('manufactures as m','p.manufactures_id','=','m.manufactures_id')
            ->get();

    }

    public static function editProduct($id){
        return DB::table('products')->where('product_id','=', $id)->first();
    }
    // update data
    public static function updateProduct($data,$id){
        return DB::table('products')->where('product_id','=', $id)->update($data);
    }
}
