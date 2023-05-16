<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;














class Tatto extends Model
{
    use HasFactory;
    protected $table = 'tatto';
    public $timestamp = false;

    public function autor(): BelongsTo
    {
        return $this->belongsTo(Estilo::class, 'fk_id_estilo');
    }

    public function imagens():HasMany
    {
        return $this->hasMany(Imagens::class,'fk_id_tatto');
    }
}
