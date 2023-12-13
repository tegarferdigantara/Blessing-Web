<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TDisconnect;

class DisconnectController extends Controller
{
    public function fixdc()
    {
        TDisconnect::create([
            'user_id' => auth()->user()->user_id,
            'server_id' => '1',
            'char_id' => '0'
        ]);
    }
}
