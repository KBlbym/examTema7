<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'artist_id',
        'name',
        'year'
      ];

      protected $table = 'albums';
      public function artists()
      {
          return $this->belongsTo(Artist::class);
      }

      public function songs()
      {
          return $this->hasMany(Song::class);
      }

     
}
