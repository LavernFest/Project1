<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';

    protected $fillable = [
        'Type'
    ];

    public function superheroes(){
        return $this->hasMany(Superheroe::class);
    }
}
