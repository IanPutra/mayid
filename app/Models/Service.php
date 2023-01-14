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
        'deskripsi',
        'service_start_time',
        'service_status',
        'service_end_time',
        'device_pickup_time',
        'price'
    ];

    public function progress()
    {
        return $this->hasMany('App\Models\Progress','service_id','service_id');
    }

    public function payment()
    {
        return $this->hasMany('App\Models\Payment','payment_id','payment_id');
    }
}
