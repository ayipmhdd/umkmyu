<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Umkm extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'short_description', 'about', 'category_id',
        'primary_photo', 'alamat', 'latitude', 'longitude',
        'instagram', 'whatsapp', 'open_days', 'open_hours', 'slug'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function photos()
    {
        return $this->hasMany(UmkmPhoto::class);
    }




    // Haversine: jarak (km) ke koordinat yang diberikan
    public function distanceFrom($lat, $lng)
    {
        if(!$this->latitude || !$this->longitude) return null;

        $earthRadius = 6371; // km

        $dLat = deg2rad($this->latitude - $lat);
        $dLng = deg2rad($this->longitude - $lng);

        $a = sin($dLat/2) * sin($dLat/2) +
             cos(deg2rad($lat)) * cos(deg2rad($this->latitude)) *
             sin($dLng/2) * sin($dLng/2);

        $c = 2 * atan2(sqrt($a), sqrt(1-$a));
        return $earthRadius * $c; // nilai dalam km
    }
}