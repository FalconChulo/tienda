<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class usuarios extends Model
{

    protected $table = 'public.usuario';
    protected $fillable = ['nombre', 'articulo_id', 'cantidad', 'total'];


}