<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Batch extends Model
{
    use HasFactory;
    protected $fillable=['batch',];

    public function poultry() : BelongsTo{
        return $this->belongsTo(Poultry::class);
    }

    public function benefit() : HasMany{
        return $this->hasMany(Benefit::class);
    }

    public function dead() : HasMany{
        return $this->hasMany(Dead::class);
    }

    public function expenses() : HasMany{
        return $this->hasMany(Expenses::class);
    }
}
