<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class orari extends Model
{
    use HasFactory;

    public function prenotazionis(): HasMany {
        return $this->hasMany(prenotazioni::class);
    }

    public function attivita()
{
    return $this->belongsTo(attivita::class);
}

}
