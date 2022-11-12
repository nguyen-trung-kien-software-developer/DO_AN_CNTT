<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'order_id',
        'product_id',
        'qty',
        'unit_price',
        'total_price',
        'created_at',
        'updated_at'
    ];
    // protected $primaryKey = ['order_id', 'product_id'];
    protected $table = 'order_items';
    // public $incrementing = false;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}