<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'title',
        'description',
        'content',
        'featured_image',
        'created_date',
        'slug',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'blogs';

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_blog_items', 'blog_id', 'product_id');
    }

    public function productBlogItems()
    {
        return $this->hasMany(ProductBlogItem::class, 'blog_id', 'id');
    }
}