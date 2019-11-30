<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Slider extends Model
{
    public static function sliders(){
        return DB::table('sliders')->get();
    }
    public static function insert($data)
    {
        return DB::table('sliders')->insert($data);
    }
    public static function slider($id){
        return DB::table('sliders')->where('slider_id', $id)->first();
    }
    public static function updateSlider($id, $data){
        return DB::table('sliders')->where('slider_id', $id)->update($data);
    }
    public static function deleteSlider($id){
        return DB::table('sliders')->where('slider_id', $id)->delete();
    }
    public static function activeSliders(){
        return DB::table('sliders')->where('active_fg', 1)->get();
    }
}
