<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = "equipo";
    protected $primaryKey = "id";
 
    public $timestamps = false;
 
    protected $fillable=[
     'imagen',
    'nombres',
    'cargo',
    'idpagina'
    ];
 
    protected $guarded=[
 
    ];
}
