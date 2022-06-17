<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "slider";
   protected $primaryKey = "id";

   public $timestamps = false;

   protected $fillable=[
    'titulo',
    'imagen',
    'idpagina'
   ];

   protected $guarded=[

   ];
}
