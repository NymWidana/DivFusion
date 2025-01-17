<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $table = "features";
     
    protected $fillable = [    'name',
    'description',
    'icon'];
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
