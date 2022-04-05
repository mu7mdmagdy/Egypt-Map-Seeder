<?php

namespace App\Models\;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Area extends Model
{
    protected $casts = ['title' => 'json'];
    protected $fillable = [
        'title'
    ];

    public function city() : BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
