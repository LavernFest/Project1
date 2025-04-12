<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function universo() : BelongsTo{
        return $this->belongsTo(Universe::class, 'universe_id', 'id');
    }

    /* */
    public function genero() : BelongsTo{
        return $this->belongsTo(Gender::class,'gender_id', 'id');
    }

    public function generolit() : BelongsTo{
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }
    /**/
}

