<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'status',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}
