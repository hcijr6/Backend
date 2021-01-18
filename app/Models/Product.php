<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function orderLines(){
        return $this->hasMany('App\Models\OrderLine');
    }
    public function providers(){
        return $this->belongsTo('App\Models\Provider');
    }
}
