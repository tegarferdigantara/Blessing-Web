<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TEventItem extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'TEventItem';
    public $timestamps = false;
}
