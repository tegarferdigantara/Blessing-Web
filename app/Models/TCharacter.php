<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TCharacter extends Model
{
    use HasFactory;

    protected $guarded = 'id';
    protected $connection = 'RohanGame';
    protected $table = 'TCharacter';
    public $timestamps = false;
}
