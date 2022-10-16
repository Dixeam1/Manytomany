<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'price',

    ];
    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
}
