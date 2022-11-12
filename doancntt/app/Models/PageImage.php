<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageImage extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'url',
        'description',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'page_images';
}