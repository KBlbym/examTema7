<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'album_id',
        'name',
        'duration',
        'order'
    ];

    protected $table = 'songs';

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

}
