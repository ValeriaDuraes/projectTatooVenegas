<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tatto extends Model
{
    use HasFactory;
    protected $table = 'tatto';
    public $timestamp = false;
}
