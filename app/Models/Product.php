<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "image_name"
    ];

    private static $products = [
        [
            'id' => 1,
            'name' => 'Product 1',
            'description' => 'Product 1 description',
            'image_name' => 'Product1.jpg',
        ],
        [
            'id' => 2,
            'name' => 'Product 2',
            'description' => 'Product 2 description',
            'image_name' => 'Product2.jpg',
        ],
        [
            'id' => 3,
            'name' => 'Product 3',
            'description' => 'Product 3 description',
            'image_name' => 'Product3.jpg',
        ],
    ];
}
