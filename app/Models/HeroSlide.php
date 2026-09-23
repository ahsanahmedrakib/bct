<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSlide extends Model
{
    use HasFactory;

    protected $fillable = [
        'subtitle',
        'title',
        'description',
        'link',
        'image',
        'seed',
        'sort_order',
    ];

    protected $casts = [
        'seed' => 'boolean',
    ];
}
