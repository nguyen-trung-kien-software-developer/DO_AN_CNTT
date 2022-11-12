<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'email',
        'fullname',
        'star',
        'mobile',
        'created_date',
        'description',
        'product_id',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'comments';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}