<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'original_title', 'nationality', 'release_date', 'vote', 'genre_id', 'cast', 'cover_path'];
    
    use HasFactory;
    
    public function genre(): BelongsTo{
        return $this->belongsTo(Genre::class);
    }
}

