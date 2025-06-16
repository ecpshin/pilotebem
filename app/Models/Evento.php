<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Evento extends Model
{
    protected $table = 'eventos';

    public function modulos(): BelongsToMany
    {
        return $this->belongsToMany(Modulo::class);
    }

    public function regioes(): BelongsToMany
    {
        return $this->belongsToMany(Regiao::class);
    }
}
