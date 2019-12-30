<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';

    public static function insert($data){
        return DB::table('customers')->insertGetId($data);
    }

}
