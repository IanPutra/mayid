<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primarykey = 'product_id';

    protected $table = "product";
    protected $fillable = [
        'name',
        'type',
        'description',
        'price',
    ];
}
