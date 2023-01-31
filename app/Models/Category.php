<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    public $timestamps = false;

    /**
     * The categories that belong to the product.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product', 'category_id', 'product_id ');
    }
}
