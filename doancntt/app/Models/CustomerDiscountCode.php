<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDiscountCode extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'discount_code_id',
        'customer_id',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = ['discount_code_id', 'customer_id'];
    protected $table = 'customer_discount_codes';
    public $incrementing = false;
}