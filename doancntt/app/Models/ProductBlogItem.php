<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBlogItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'blog_id',
        'created_at',
        'updated_at'
    ];
    // protected $primaryKey = ['order_id', 'product_id'];
    protected $table = 'product_blog_items';
    // public $incrementing = false;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }
}