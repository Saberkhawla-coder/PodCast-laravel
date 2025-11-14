<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
   use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'description', 'image_path', 'genre', 'is_published'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
