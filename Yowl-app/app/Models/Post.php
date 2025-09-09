<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'url',
        'title',
        'description',
        'image',
    ];

    /**
     * un post appartient à un utilisateur.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * un post avoir plusieurs commentaires.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
