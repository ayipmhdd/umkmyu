<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UmkmPhoto extends Model
{
    protected $fillable = ['umkm_id', 'photo', 'caption'];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }
}