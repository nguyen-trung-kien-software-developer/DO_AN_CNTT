<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kjmtrue\VietnamZone\Models\Province;

class Transport extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'province_id',
        'price',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'transports';

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }
}