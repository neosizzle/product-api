<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'images' => 'array',
        'options' => 'array'
    ];

    // make fields fillable
    protected $fillable = [
        'title', 'slug' , 'description' , 'image','images','options','avgRating','ratings','price','oldPrice'
    ];
}
