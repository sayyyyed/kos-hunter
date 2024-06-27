<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    protected $fillable = ['properti_id', 'image_url'];

    public function properti()
    {
        return $this->belongsTo(Properti::class);
    }
}
