<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Superheroe extends Model
{
    use HasFactory;
    
    protected $table = 'superheroes';

    protected $fillable = [
        'name',
        'realname',
        'universe_id',
        'genre_id',
        'gender_id',
        'imageUrl'
    ];

    public function universo(){
        return $this->belongsTo(Universe::class);
    }

    public function genero(){
        return $this->belongsTo(Gender::class);
    }

    public function generolit(){
        return $this->belongsTo(Genre::class);
    }
}

