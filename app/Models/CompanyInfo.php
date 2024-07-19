<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{

   use HasFactory;

    protected $table = 'about_us';

    protected $fillable = [
        'title',
        'description',
        'category',
        'detailed_info',
        'image',
    ];

}
