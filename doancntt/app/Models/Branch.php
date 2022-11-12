<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kjmtrue\VietnamZone\Models\Ward;

class Branch extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'housenumber_street',
        'ward_id',
        'order',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'branches';

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id', 'id');
    }
}