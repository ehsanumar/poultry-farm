<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dead extends Model
{
    use HasFactory;
    protected $fillable = ['quantity','day'];

    public function batch(): BelongsTo
    {
        return $this->belongsTo(Batch::class);
    }
}
