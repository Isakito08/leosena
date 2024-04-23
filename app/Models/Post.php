<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //relacion uno a muchos inversa

    protected $guarded = ['id','created_at','update_at'];

    public function egresado(){

        return $this->belongsTo(Egresado::class); 
    
    }

    public function category(){

        return $this->belongsTo(Category::class); 
    
    }

    //Relacion muchos a muchos

    public function tags(){

        return $this->belongsToMany(Tag::class); 
    

    }

    //Relacion uno a uno polimorfica

    public function image(){

        return $this->morphOne(Image::class, 'imageable'); 
    
      }
    
}
