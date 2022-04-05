<?php

namespace App\Models\;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends BaseModel
{
    protected $casts = ['title' => 'object'];
    protected $fillable = [
        'title'
    ];

    public function areas(): HasMany
    {
        return $this->hasMany(Area::class);
    }
}
