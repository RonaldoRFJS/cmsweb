<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table = "entrada";
    protected $primaryKey = "id";
 
    public $timestamps = false;
 
    protected $fillable=[
    'titulo',
    'contenido',
    'idpagina'
    ];
 
    protected $guarded=[
 
    ];
}
