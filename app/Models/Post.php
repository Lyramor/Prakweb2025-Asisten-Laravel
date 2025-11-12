<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'image',
        'user_id',
        'category_id',
    ];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    // User.php
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Post.php
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
