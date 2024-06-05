<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anime extends Model
{
    use HasFactory;

    protected $table = 'animes';

    protected $fillable = [
        'genre_id',
        'judul',
        'sinopsis',
        'tahun_rilis',
        'poster',
    ];

    public function genre()
    {
        return $this->belongsTo(genre::class);
    }
}
