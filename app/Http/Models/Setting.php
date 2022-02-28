<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded =['_token','id'];
    protected $casts = array(
      'serialized'=>'boolean'
    );

    public static function getByCode($code)
    {
        $setting = Setting::where('code',$code)->first();
        if($setting){
            return $setting->value;
        }else{
            return '';
        }
    }
}
