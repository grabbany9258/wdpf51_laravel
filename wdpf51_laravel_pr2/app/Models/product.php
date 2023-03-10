<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['product_name', 'product_details', 'product_price', 'product_image', 'product_category', 'product_stock'];
}
