<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'seed'];

    protected $casts = [
        'seed' => 'boolean',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}