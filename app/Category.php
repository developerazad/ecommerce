<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $primaryKey = 'category_id';

    public static function categories(){
        return DB::table('categories')->where('active_fg', 1)->get();
    }
}
