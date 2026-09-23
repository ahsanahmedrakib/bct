<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'category_id', 'image', 'seed'];

    protected $casts = [
        'seed' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
