<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stock',
        'price',
        'category_id',
        'description',
        'shelf_life',
        'product_code',
        'pallet',
        'packaging',
        'detailed_description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
