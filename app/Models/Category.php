<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'name',
    ];

    // MODUL 2-1 START
    // Relasi hasMany ke Post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    // MODUL 2-1 END
}
