<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humanist extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'lastName',
      'rating',
      'departamento',
      'descripcion',
      'fotoUrl'
    ];
}
