<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TDisconnect extends Model
{
    use HasFactory;

    protected $guarded = [
        'no'
    ];

    protected $table = "TDisconnect";

    public $timestamps = false;
}
