<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function user(){
        return $this->belongsTo(User::class); // Mapeamento 1:1
    }

    public function products(){
        return $this->hasMany(Products::class, ); // Mapeamento 1:N
    }
}
