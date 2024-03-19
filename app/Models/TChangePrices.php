<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TChangePrices extends Model
{
    use HasFactory;
    protected $connection = "RohanManage";
    protected $table = "TChangePrices";
    public $timestamps = false;

}
