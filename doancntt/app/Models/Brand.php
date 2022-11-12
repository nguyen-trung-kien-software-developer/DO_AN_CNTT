<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'description',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'brands';

    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }
}