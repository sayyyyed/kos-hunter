<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';

    protected $fillable = [
        'properti_id',
        'user_id',
        'jumlah',
    ];

    public function properti()
    {
        return $this->belongsTo(Properti::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
