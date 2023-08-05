<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPop extends Model
{
    use HasFactory;

    protected $table = 'pop';

    protected $primaryKey = "POPID";

    protected $guarded = [
        'timestamp',
    ];

    public $timestamps = false;
}
