<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Benefit extends Model
{
    use HasFactory;
    protected $fillable = ['amount'];

    public function batch() :BelongsTo{
        return $this->belongsTo(Batch::class);
    }
}
