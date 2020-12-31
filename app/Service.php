<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'description',
        'unit_price',
        'image',
        'status',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
