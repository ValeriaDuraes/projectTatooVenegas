<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Imagens extends Model
{
    use HasFactory;
    protected $table = 'imagens';
    public $timestamps = false;

    public function tatto():BelongsTo
    {
        return $this -> belongsTo(Tatto::class,'fk_id_estilo');
    }

}
