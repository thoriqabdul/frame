<?php

namespace App\Http\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded =['_token','id'];

    protected $with=['publish'];


    public function publish()
    {
        return $this->belongsTo(User::class, 'publish_id');
    }
}
