<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Product extends Model
{
    use HasFactory;

    public function orderDetails(){
        return $this->belongsToMany(OrderDetail::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
