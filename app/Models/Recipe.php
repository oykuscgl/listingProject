<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipe';

    protected $fillable = [
        'title',
        'description',
        'category',
        'detailed_info',
        'image',
    ];

    protected $casts = [
        'description' => 'array',
    ];


}
