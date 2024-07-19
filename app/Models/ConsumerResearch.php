<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsumerResearch extends Model
{

   use HasFactory;

    protected $table = 'consumer_research';

    protected $fillable = [
        'title',
        'description',
        'detailed_info',
        'image',
    ];

}
