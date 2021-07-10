<?php

class GlobalHelper {

    public static function dateFormat($date) {
        return date('d/F/Y H:i:s', strtotime($date));
    }

    public static function activeMenu($url) {
        if (\Request::segment(1)==$url) {
            return "active";
        }
    }    

    public static function listMenu($position) {
    	$row = App\Menus::where('position',$position)->get();
        return $row;
    }

    public static function config($key) {
    	$row = App\Configurations::where('key',$key)->first();
        if (!$row) {
            return "No Data";
        }
        return $row->value;
    }

    public static function idrFormat($nominal) {
        $row = number_format($nominal, 0, ',', '.');
        return $row;
    }

    public static function imageShow($image){
        if (isset($image)) {
            return \URL::to('/').'/'.$image;
        }else{
            return "https://via.placeholder.com/150";
        }
    }

    // Get Session Data
    public static function session(){
        $role = App\Roles::where('id',\Auth::user()->role_id)->first();
        return $role->label;
    }

}