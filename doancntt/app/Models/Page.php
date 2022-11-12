<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'title',
        'content',
        'type',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'pages';
}