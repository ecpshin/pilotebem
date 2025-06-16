<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Modulo extends Model
{
    protected $table = 'modulos';

    protected $casts = [
        'materiais_didaticos' => 'array'
    ];

    public function eventos(): BelongsToMany
    {
        return $this->belongsToMany(Evento::class);
    }
}
