<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmarker extends Model
{
    use HasFactory;
    /*public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function saved_songs()
    {
        return $this->morphToMany(Saved_Song::class, 'taggable');
    }*/
}
