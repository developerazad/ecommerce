<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'ac_users';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /*===============================crude===================*/
    public static function users(){
        return DB::table('ac_users as u')
            ->select('u.*', 'ug.user_group_name')
            ->leftJoin('ac_user_groups as ug', 'u.user_group_id', '=', 'ug.user_group_id')
            ->get();
    }
    public static function insert($data){
        return DB::table('ac_users')->insert($data);
    }
    public static function user($id){
        return DB::table('ac_users')->where('user_id', $id)->first();
    }
    public static function updateUser($data, $id){
        return DB::table('ac_users')->where('user_id', $id)->update($data);
    }
    public static function deleteUser($id){
        return DB::table('ac_users')->where('user_id', $id)->delete();
    }
}
