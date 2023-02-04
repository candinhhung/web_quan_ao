<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameProduct',
        'price',
        'quantity',
        'description',
        'img',
        'size',
        'id_category'
    ];
    protected $primaryKey = 'id';
    protected $table = 'product';
}
