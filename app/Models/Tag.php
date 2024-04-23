<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable  = ['name','slug','color'];
    // Relación muchos a muchos con el modelo Post
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}