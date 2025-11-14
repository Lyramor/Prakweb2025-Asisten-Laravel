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

    // MODUL 2-1 START
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi belongsTo untuk User (author)
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Tetap ada untuk backward compatibility
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // MODUL 2-1 END
}
