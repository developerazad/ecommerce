<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Fontend extends Model
{
    // get all categories
    public static function getAllCategories(){
        return DB::table('categories')
            ->select('*')
            ->where('active_fg','=',1)
            ->get();
    }
}
