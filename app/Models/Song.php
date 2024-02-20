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

    protected $table = 'albums';

    public function albums()
    {
        return $this->belongsTo(Album::class);
    }

    public function getAttributeTypes()
    {
        return [
          'album_id' => 'integer',
          'name' => 'string',
          'duration' => 'integer',
          'order' => 'integer',
        ];
    }
}
