<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TEventItemController extends Controller
{

    public function index()
    {
        $this->authorize('isAdmin', User::class);
        return view('dashboard.admin.send-item');
    }
    public function store(Request $request)
    {
        $this->authorize('isAdmin', User::class);
        // Validate the request data
        $validatedData = $request->validate([
            'item_code' => 'required|integer',
            'stack' => 'required|integer'
        ]);

        // Prepare the raw SQL query with placeholders
        $sql = "
        INSERT INTO [RohanGame].[dbo].[TEventItem]
        SELECT
            :item_code, -- [type]
            0x00, -- attr
            :stack, -- stack
            0, -- rank
            0, -- equip level
            0, -- str
            0, -- dex
            0, -- int
            char_id, -- char id
            GETDATE(), -- date
            0
        FROM
            RohanGame.dbo.TCharacterLogin
        WHERE
            login = 1
    ";

        // Execute the SQL query with the validated data
        DB::statement($sql, [
            'item_code' => $validatedData['item_code'],
            'stack' => $validatedData['stack']
        ]);

        // Return a success response
        return redirect(route('send-item'))->with('success', 'You have been successfully send an item with amount = ' . $validatedData['stack']);
    }
}
