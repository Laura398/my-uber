<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model{
    use HasFactory;
    public function products(){
     return $this->belongsToMany('Product');
    }
    public function profile(){
        return $this->hasOne('Profile');
    }
    public function order(){
        return $this->hasOne('Order');
    }
}