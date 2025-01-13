<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $table = "features";
     
    protected $fillable = [    'name',
    'description',
    'product_id',
    'icon'];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
