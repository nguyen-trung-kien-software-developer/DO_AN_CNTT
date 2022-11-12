<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentCategory extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'introduction_id',
        'slug',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'parent_categories';

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'parent_category_id', 'id');
    }

    public function introduction()
    {
        return $this->belongsTo(Introduction::class, 'introduction_id', 'id');
    }

    public function histories()
    {
        return $this->hasMany(History::class, 'parent_category_id', 'id');
    }
}