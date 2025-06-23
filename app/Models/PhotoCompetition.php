<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PhotoCompetition extends Model
{
    use HasFactory;

    protected $fillable = ['nama_gambar', 'id_past'];

    public function past(): BelongsTo
    {
        return $this->belongsTo(Past::class, 'id_past');
    }
}
