<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Relations\HasMany;

class Penerbit extends Model
{
      protected $guarded = [];
    public function penerbit(): HasMany
    {
        return $this->hasMany(Buku::class);
    }
}
