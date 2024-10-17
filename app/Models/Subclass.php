<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subclass extends Model
{
    public function enchanter(): HasMany
    {
        return $this->hasMany(Enchanter::class);
    }
}
