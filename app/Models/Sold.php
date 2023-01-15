<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sold extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'sold_id';

    protected $table = "sold";
    protected $fillable = [
        'payment_id',
        'product_id',
        'customer_id',
        'status',
        'time_deliver',
    ];

    public function Product()
    {
        return $this->belongsTo('App\Models\Product','product_id','product_id');
    }

    public function Customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id','customer_id');
    }
}
