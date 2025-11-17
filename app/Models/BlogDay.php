<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'title',
        'description',
        'image', // <-- tambah ini
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
