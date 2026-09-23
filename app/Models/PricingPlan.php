<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'period',
        'features',
        'featured',
        'seed',
        'sort_order',
    ];

    protected $casts = [
        'features' => 'array',
        'featured' => 'boolean',
        'seed' => 'boolean',
    ];
}