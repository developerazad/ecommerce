<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{

    public static function categories(){
        return DB::table('categories')->orderBy('category_name', 'asc')->get();
    }

    public static function insert($data){
        return DB::table('categories')->insert($data);
    }
    public static function category($id){
        return DB::table('categories')->where('category_id', $id)->first();
    }
    public static function updateCategory($data, $id){
        return DB::table('categories')->where('category_id', $id)->update($data);
    }
    public static function deleteCategory($id){
        return DB::table('categories')->where('category_id', $id)->delete();
    }
}
