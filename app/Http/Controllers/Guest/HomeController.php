<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\isMaintenance;
use App\Models\TNGuild;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'TNGuild' => TNGuild::all(),
            'TOP15' => DB::select(
                DB::raw('SELECT TOP 10 char_id,kill_count,killed_count,
                (SELECT name FROM RohanGame.dbo.TCharacter WHERE char_id=RohanGame.dbo.TCharacter.id) AS name,
                (SELECT ctype_id FROM RohanGame.dbo.TCharacter WHERE char_id=RohanGame.dbo.TCharacter.id) AS class,
                (SELECT login FROM RohanGame.dbo.TCharacterLogin WHERE char_id=RohanGame.dbo.TCharacterStatus.char_id) AS sts,
                (SELECT play_sec FROM RohanGame.dbo.TCharacterLogin WHERE char_id=RohanGame.dbo.TCharacterStatus.char_id) AS playsec, 
                (SELECT level FROM RohanGame.dbo.TCharacterAbility WHERE char_id=RohanGame.dbo.TCharacterStatus.char_id) AS lvl FROM [RohanGame].[dbo].[TCharacterStatus] ORDER BY kill_count DESC')
            ),
            'User' => User::count(),
            'ServerInfo' => IsMaintenance::select('maintenance')->first()->maintenance == 1
        ]);
    }
}
