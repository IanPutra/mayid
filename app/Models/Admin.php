<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primarykey = 'admin_id';

    protected $table = "admin";
    protected $fillable = [
        'username',
        'e_mail',
        'dateof_birth',
        'password',
        'gender',
        'department',
    ];
}
