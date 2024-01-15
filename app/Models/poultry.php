<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poultry extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'location',
    ];
    public function batch() : HasMany{
        return $this->hasMany(Batch::class);
    }
}
