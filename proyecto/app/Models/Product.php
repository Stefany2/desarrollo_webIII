<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'stock', 'image']; // Campos rellenables
     // Mutador para asegurar que el precio sea positivo
     public function setPriceAttribute($value) {
        $this->attributes['price'] = max(0, $value); // Asegura que el precio sea positivo
    }
}
