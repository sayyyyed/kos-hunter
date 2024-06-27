<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    protected $table = 'properti';

    protected $fillable = [
        'admin_id',
        'nama',
        'tipe',
        'harga',
        'alamat',
        'lokasi',
        'wifi',
        'jumlah_kamar',
        'tipe_kamarmandi',
        'dapur',
        'lain',
        'image_url',
    ];

    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function calculateAvailableRooms()
    {
        return $this->jumlah_kamar - $this->bookings()->sum('jumlah');
    }
}
