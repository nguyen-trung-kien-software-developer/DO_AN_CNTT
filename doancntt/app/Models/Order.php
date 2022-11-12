<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kjmtrue\VietnamZone\Models\Ward;

class Order extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'id',
        'created_date',
        'order_status_id',
        'shipping_status_id',
        'customer_id',
        'shipping_fullname',
        'shipping_mobile',
        'shipping_email',
        'shipping_housenumber_street',
        'shipping_ward_id',
        'payment_method',
        'shipping_fee',
        'delivered_date',
        'discount_code_id',
        'note',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'orders';
    public $incrementing = false;

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'shipping_ward_id', 'id');
    }

    public function customer()
    {
        return $this->hasOne(Customer::class, 'id', 'customer_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_items', 'order_id', 'product_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }

    public function discountCode()
    {
        return $this->belongsTo(DiscountCode::class, 'discount_code_id', 'id');
    }

    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class, 'order_status_id', 'id');
    }

    public function shippingStatus()
    {
        return $this->belongsTo(ShippingStatus::class, 'shipping_status_id', 'id');
    }
}