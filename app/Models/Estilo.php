<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estilo extends Model
{
    use HasFactory;
    protected $table = 'estilo';
    protected $primaryKey = 'id_estilo';
    public $timestamps = false;

    public function tattos():HasMany
    {
        return $this->hasMany(Tatto::class, 'fk_id_estilo');
    }
}

