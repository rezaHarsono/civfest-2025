<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Past extends Model
{
    use HasFactory;

    protected $fillable = ['nama_event', 'tema_event', 'tahun_event', 'slug'];

    public function photos(): HasMany
    {
        return $this->hasMany(PhotoCompetition::class, 'id_past');
    }
}
