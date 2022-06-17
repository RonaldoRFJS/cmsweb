<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    protected $table = "pagina";
    protected $primaryKey = "id";
 
    public $timestamps = false;
 
    protected $fillable=[
     'iduser',
     'dominio',
     'estado',
     'idpagina'
    ];
 
    protected $guarded=[
 
    ];
}
