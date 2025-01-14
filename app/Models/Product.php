<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = ["title", "decription"];

    public function orders(){
        return $this->belongsToMany(Order::class);
    }
    public function features(){
        return $this->belongsToMany(Feature::class);
    }
}
