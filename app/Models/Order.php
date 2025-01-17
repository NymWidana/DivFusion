<?php

namespace App\Models;

use App\Models\User;
use App\Notifications\OrderStatusChanged;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;
    protected $fillable = ["orderer_name", "orderer_phone_number", "message", "user_id", "total_amount", "order_date","status"];
    public function products(){
        return $this->belongsToMany(Product::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }


}
