<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'payment_id';

    protected $table = "payment";
    protected $fillable = [
        'method',
        'time',
        'payment_verification',
        'time_verification'
    ];

    public function service()
    {
        return $this->belongsTo('App\Models\Service','payment_id','payment_id');
    }
}
