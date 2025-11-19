<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews'; // ⬅️ Sesuaikan nama tabelnya

    protected $fillable = [
        'name',
        'photo',
        'review_text',
        'rating',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'rating' => 'integer',
    ];
}
