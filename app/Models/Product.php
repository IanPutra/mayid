<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'product_id';

    protected $table = "product";
    protected $fillable = [
        'name',
        'image',
        'type',
        'description',
        'amount',
        'price',
    ];

    public function Sold()
    {
        return $this->hasMany('App\Models\Sold','product_id','product_id');
    }
}
