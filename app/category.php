<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'slug',

    ];
    protected $primarykey = "id";
    public function product()
    {
        return $this->hasMany(product::class, 'category_id', 'id');
    }
}
