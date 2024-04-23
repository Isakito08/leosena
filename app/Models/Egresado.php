<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Regional;

class Egresado extends Model
{
    use HasFactory;
    protected $fillable = [
        'ficha',
        'programa',
        'nis',
        'registro',
        'tipo_documento',
        'num_documento',
        'nombre',
        'residencia',
        'correo',
        'telefono',
        'telefono_al',
        'celular',
        'año',
        'sexo',

    ];
    protected $table = 'egresado';
    
     //relacion uno a muchos
  
  public function posts(){

    return $this->hasMany(Post::class); 

  }

}
