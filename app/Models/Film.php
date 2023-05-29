<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'films';
    protected $guarded = false;

    public function studio(){
        return $this->belongsTo(Studio::class,'studio_id', 'id');
    }
    public function genres(){
        return $this->belongsToMany(Genre::class,'film_genres', 'film_id','genre_id');
    }


}
