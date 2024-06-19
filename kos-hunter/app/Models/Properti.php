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
        'wifi',
        'jumlah_kamar',
        'tipe_kamarmandi',
        'dapur',
        'lain',
        'image_url'
    ];
}
