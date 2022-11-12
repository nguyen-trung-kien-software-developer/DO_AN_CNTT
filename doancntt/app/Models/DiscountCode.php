<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'code',
        'from_date',
        'to_date',
        'description',
        'discount_price',
        'active',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'discount_codes';

    public function customerDiscountCodes()
    {
        return $this->hasMany(CustomerDiscountCode::class, 'discount_code_id', 'id');
    }
}