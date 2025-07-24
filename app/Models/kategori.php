<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori extends Model
{
    //
    protected $guarded = [];
    use SoftDeletes;

    public function bukus(): HasMany
    {
        return $this->hasMany(buku::class);
    }
}
