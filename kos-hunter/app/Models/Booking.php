<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $table = 'booking';

    protected $fillable = [
        'user_id',
        'properti_id',
        'jumlah',
    ];

    public function properti(): BelongsTo
    {
        return $this->belongsTo(Properti::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
