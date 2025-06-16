<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Regiao extends Model
{
    //
    protected $table = 'regioes';


    /**
     * Get the eventos of the Regiao
     *
     * @return BelongsToMany
     */
    public function eventos(): BelongsToMany
    {
        return $this->belongsToMany(Evento::class);
    }
}
