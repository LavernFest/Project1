<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    protected $table = 'universes';

    protected $fillable = [
        'unName'
    ];

    public function superheroe(){
        return $this->hasMany(Superheroe::class);
    }
}
