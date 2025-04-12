<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Universe extends Model
{
    protected $table = 'universes';

    protected $fillable = [
        'unName'
    ];

    public function superheroes() : HasMany{
        return $this->hasMany(Superheroe::class);
    }
}
