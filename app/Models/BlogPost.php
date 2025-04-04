<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{

   use HasFactory;

    protected $table = 'blog_post';

    protected $fillable = [
        'title',
        'description',
        'category',
        'detailed_info',
    ];

}
