<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\TCharacter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class TEventItemController extends Controller
{

    public function onlineIndex()
    {
        $this->authorize('isAdmin', User::class);
        return view('dashboard.admin.send-item-on');
    }
    public function onlineStore(Request $request)
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
        return redirect(route('send-item-online'))->with('success', 'You have been successfully send an item with amount = ' . $validatedData['stack']);
    }
    public function onlineOfflineIndex()
    {
        $this->authorize('isAdmin', User::class);
        return view('dashboard.admin.send-item-on-off');
    }
    public function onlineOfflineStore(Request $request)
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
            id, -- char id
            GETDATE(), -- date
            0
        FROM
            RohanGame.dbo.TCharacter
    ";

        // Execute the SQL query with the validated data
        DB::statement($sql, [
            'item_code' => $validatedData['item_code'],
            'stack' => $validatedData['stack']
        ]);

        // Return a success response
        return redirect(route('send-item-on-off'))->with('success', 'You have been successfully send an item online/offline with amount = ' . $validatedData['stack']);
    }
    public function offlineIndex()
    {
        $this->authorize('isAdmin', User::class);
        return view('dashboard.admin.send-item-off');
    }
    public function offlineStore(Request $request)
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
            login = 0
    ";

        // Execute the SQL query with the validated data
        DB::statement($sql, [
            'item_code' => $validatedData['item_code'],
            'stack' => $validatedData['stack']
        ]);

        // Return a success response
        return redirect(route('send-item-offline'))->with('success', 'You have been successfully send an item offline with amount = ' . $validatedData['stack']);
    }
    public function byIdIndex()
    {
        $this->authorize('isAdmin', User::class);
        return view('dashboard.admin.send-item-by-id');
    }
    public function byIdStore(Request $request)
    {
        $this->authorize('isAdmin', User::class);

        // Validate the request data
        $validatedData = $request->validate([
            'nickname' => 'required|string',
            'attribute' => 'required|string',
            'item_code' => 'required|integer',
            'stack' => 'required|integer'
        ]);

        $attribute = $validatedData['attribute'];

        // Menghilangkan prefix "0x" jika ada
        if (substr($attribute, 0, 2) === '0x') {
            $attribute = substr($attribute, 2);
        }

        // Pastikan bahwa nilai $attribute adalah string heksadesimal yang valid
        if (!ctype_xdigit($attribute)) {
            return redirect(route('send-item-by-id'))->with('failed', 'Invalid hexadecimal attribute.');
        }

        // Temukan nickname dalam database
        $findNickname = TCharacter::where('name', $validatedData['nickname'])->first(['id', 'name']);

        if (!$findNickname) {
            return redirect(route('send-item-by-id'))->with('failed', 'Nickname tidak ditemukan');
        }

        // Prepare the raw SQL query with placeholders
        $sql = "
            INSERT INTO [RohanGame].[dbo].[TEventItem]
            (type, attr, stack, rank, equip_level, equip_strength, equip_dexterity, equip_intelligence, char_id, date, exp)
            SELECT
                :item_code, -- [type]
                CONVERT(VARBINARY(MAX), :attribute, 1), -- attr
                :stack, -- stack
                0, -- rank
                0, -- equip_level
                0, -- str_value
                0, -- dex_value
                0, -- int_value
                id, -- char_id
                GETDATE(), -- date
                0 -- unknown
            FROM
                RohanGame.dbo.TCharacter
            WHERE name = :nickname
        ";

        // Execute the SQL query with the validated data using PDO directly
        $pdo = DB::connection()->getPdo();
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':item_code', $validatedData['item_code'], PDO::PARAM_INT);
        $stmt->bindParam(':attribute', $validatedData['attribute'], PDO::PARAM_STR); // Gunakan PDO::PARAM_STR untuk string
        $stmt->bindParam(':stack', $validatedData['stack'], PDO::PARAM_INT);
        $stmt->bindParam(':nickname', $validatedData['nickname'], PDO::PARAM_STR);

        // Eksekusi query
        try {
            if ($stmt->execute()) {
                // Return a success response
                return redirect(route('send-item-by-id'))->with('success', 'You have been successfully sent an item with amount = ' . $validatedData['stack']);
            } else {
                // Jika eksekusi query gagal
                return redirect(route('send-item-by-id'))->with('failed', 'Failed to send item. Please try again.');
            }
        } catch (\Exception $e) {
            // Tangani kesalahan jika query gagal
            return redirect(route('send-item-by-id'))->with('failed', 'Failed to send item. Error: ' . $e->getMessage());
        }
    }



    public function rpsIndex()
    {
        $this->authorize('isAdmin', User::class);
        return view('dashboard.admin.send-rps-by-id');
    }
    public function rpsStore(Request $request)
    {
        $this->authorize('isAdmin', User::class);
        // Validate the request data
        $validatedData = $request->validate([
            'login_id' => 'required|string',
            'amount' => 'required|integer'
        ]);

        $findUser = User::where('login_id', $validatedData['login_id'])->first();
        if (!$findUser) {
            return redirect(route('send-rps'))->with('failed', 'Login Id tidak tersedia didalam database');
        }

        // Prepare the raw SQL query with placeholders
        $sql = "
        UPDATE rohanuser.dbo.tuser
        SET point = point + :amount
        WHERE login_id = :login_id
    ";

        // Execute the SQL query with the validated data
        DB::statement($sql, [
            'amount' => $validatedData['amount'],
            'login_id' => $validatedData['login_id']
        ]);

        // Return a success response
        return redirect(route('send-rps'))->with('success', 'You have been successfully send rps with amount = ' . $validatedData['amount']);
    }
}
