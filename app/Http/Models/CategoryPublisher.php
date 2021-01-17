<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryPublisher extends Model
{
    protected $guarded =['_token','id'];

    protected $with=['naskah'];

    public function naskah()
    {
        return $this->belongsTo(Script::class, 'naskah_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
