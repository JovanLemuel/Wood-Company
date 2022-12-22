<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        "supplier_name",
        "phone",
        "city"
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
