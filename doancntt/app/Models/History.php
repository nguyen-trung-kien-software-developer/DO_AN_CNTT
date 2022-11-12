<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'description',
        'timeline',
        'parent_category_id',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'histories';

    public function parentCategory()
    {
        return $this->belongsTo(ParentCategory::class, 'parent_category_id', 'id');
    }
}