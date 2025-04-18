<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = 'genders';

    protected $fillable = [
        'type'
    ];

    public function superheroes(){
        return $this->hasMany(Superheroe::class);
    }
}
