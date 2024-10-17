<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Enchanter extends Model
{
    public function subclass(): BelongsTo
    {
        return $this->belongsTo(subclass::class);
    }
}