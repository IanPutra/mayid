<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'service_id';

    protected $table = "service";
    protected $fillable = [
        'customer_id',
        'payment_id',
        'device_name',
        'service_start_time',
        'service_status',
        'service_end_time',
        'device_pickup_time',
        'price',
        'description',
    ];
}
