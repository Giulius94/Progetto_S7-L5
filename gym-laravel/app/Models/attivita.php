<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class attivita extends Model
{
    use HasFactory;

    public function oraris(): HasMany {
        return $this->hasMany(orari::class);
    }

    public function prenotazionis(): HasMany {
        return $this->hasMany(prenotazioni::class);
    }

    public function Users(): HasMany {
        return $this->hasMany(User::class);
    }

    

}
