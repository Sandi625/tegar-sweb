<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_id',
        'title',
        'description',
        'order' // urutan hari
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
