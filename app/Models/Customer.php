<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'customer_id';

    protected $table = "customer";
    protected $fillable = [
        'username',
        'e_mail',
        'dateof_birth',
        'password',
        'gender',
    ];
}
