<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PublicProduct extends Model
{
    // get all categories
    public static function categories(){
        return DB::table('categories')
            ->select('*')
            ->where('active_fg','=',1)
            ->get();
    }
}
