<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

    protected $fillable = ['name','description', 'phone', 'mobile_phone','slug'];

    public function user(){
        return $this->belongsTo(User::class); // Mapeamento 1:1
    }

    public function products(){
        return $this->hasMany(Product::class ); // Mapeamento 1:N
    }
}
