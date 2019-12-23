<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    public static function insert($data){
        return DB::table('customers')->insertGetId($data);
    }
}
