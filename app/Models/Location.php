<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'region',
        'address',
        'phone1',
        'phone2',
        'email',
        'directions_link',
        'color',
        'seed',
        'sort_order',
    ];

    protected $casts = [
        'seed' => 'boolean',
    ];
}