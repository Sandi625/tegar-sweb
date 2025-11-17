<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',   // <= ditambahkan
        'title',
        'slug',
        'thumbnail',     // <= ditambahkan
        'images',
        'price',
        'description',
        'status'
    ];

    protected $casts = [
        'images' => 'array',
        'status' => 'boolean',
    ];

    // Relasi ke kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi ke tour days
    public function days()
    {
        return $this->hasMany(TourDay::class)->orderBy('order');
    }
}
