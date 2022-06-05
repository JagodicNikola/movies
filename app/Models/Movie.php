<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title' ,
        'director' ,
        'genre' ,
        'year',
        'storyline',
    ];

    public function comments() {
        return $this->hasMany(Comment::class);//This relation(hasMany) indicates that each instance of the model has zero or more instances of another model.
    }
}
