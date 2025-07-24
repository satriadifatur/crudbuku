<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class buku extends Model
{
    //
     protected $guarded = [];
        use SoftDeletes;
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class);
    }

    public function penerbit(): BelongsTo
    {
        return $this->belongsTo(penerbit::class);
    }
}
