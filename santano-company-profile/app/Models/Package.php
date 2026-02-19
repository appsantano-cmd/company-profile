<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type', // 'thematic' or 'custom'
        'price',
        'description',
        'features',
        'additional_options',
        'is_active',
        'order'
    ];

    protected $casts = [
        'features' => 'array',
        'additional_options' => 'array',
        'is_active' => 'boolean'
    ];
}