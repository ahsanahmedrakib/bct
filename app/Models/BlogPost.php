<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'image',
        'description',
        'author',
        'published_date',
        'seed',
        'sort_order',
    ];

    protected $casts = [
        'seed' => 'boolean',
        'published_date' => 'date',
    ];
}