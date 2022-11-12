<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageItem extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'product_id',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'image_items';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}