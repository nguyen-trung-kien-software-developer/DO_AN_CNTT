<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'barcode',
        'name',
        'weight',
        'made_by',
        'created_date',
        'price',
        'sale_price',
        'featured_image',
        'inventory_qty',
        'description',
        'description_details',
        'use_tutorial',
        'featured',
        'category_id',
        'brand_id',
        'slug',
        'is_active',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'products';

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'category_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ImageItem::class, 'product_id', 'id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'product_id', 'id');
    }
}