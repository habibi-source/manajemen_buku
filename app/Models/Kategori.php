<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Relations\HasMany;

class Kategori extends Model
{
    protected $guarded = [];
    public function bukus(): HasMany
    {
        return $this->hasMany(Buku::class);
    }
}
