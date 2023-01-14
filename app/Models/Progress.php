<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primarykey = 'progress_id';

    protected $table = "progress";
    protected $fillable = [
        'service_id',
        'admin_id',
        'time',
        'detail'
    ];

    public function service()
    {
        return $this->belongsTo('App\Models\Service','service_id','service_id');
    }
}
