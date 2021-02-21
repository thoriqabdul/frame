<?php

namespace App\Http\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Script extends Model
{
    protected $guarded =['_token','id'];

    public function other()
    {
        return $this->hasMany(Other::class, 'naskah_id');
    }
    public function segment()
    {
        return $this->hasMany(Segment::class, 'naskah_id');
    }
    public function keyword()
    {
        return $this->hasMany(Keyword::class, 'naskah_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id'); 
    }
}
