<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kjmtrue\VietnamZone\Models\Ward;

class Company extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'logo',
        'favicon',
        'name',
        'email',
        'map',
        'map_url',
        'hotline',
        'advise_phone',
        'website',
        'housenumber_street',
        'facebook',
        'facebook_url',
        'google_url',
        'twitter_url',
        'youtube_url',
        'shipping_commit',
        'bank_account',
        'ward_id',
        'seo_keyword',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    protected $table = 'companies';

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id', 'id');
    }
}