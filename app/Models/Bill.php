<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_product',
        'total',
        'date'
    ];
    protected $primaryKey = 'id';
    protected $table = 'bill';
}
