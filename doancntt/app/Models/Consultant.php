<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'fullname',
        'email',
        'mobile',
        'product_type_name',
        'content',
        'created_date',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'consultants';
}