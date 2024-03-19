<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AHWebsiteLog;
use App\Models\TChangePrices;
use App\Models\TCharacter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Rules\ReCaptcha;

class AccountController extends Controller
{
    public function changePasswordView()
    {
        return view('dashboard.character.changepw');
    }
    public function changePasswordUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|max:50|confirmed',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        if (!Hash::check($validatedData['current_password'], auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::where('user_id', auth()->user()->user_id)->update([
            'password' => Hash::make($validatedData['new_password']),
            'login_pw' => md5($validatedData['new_password'])
        ]);
        AHWebsiteLog::create([
            'user_id' =>  auth()->user()->user_id,
            'login_id' =>  auth()->user()->login_id,
            'grade' =>  auth()->user()->grade,
            'name_activity' => 'Change Password',
            'date' => date('Y-m-d H:i:s')
        ]);


        return back()->with("status", "Password changed successfully!");
    }

    public function changeNicknameView() {
        return view('dashboard.character.changenickname', [
            'characterName'=> TCharacter::select('name')->where('user_id', auth()->user()->user_id)->get('*'),
            'price' => TChangePrices::where('change_type', 'Change Nickname')->sum('price')
        ]);
    }

    public function changeNicknameUpdate(Request $request) {
        $validatedData = $request->validate([
            'nickname'=> 'required|string',
            'newNickname' => [
                'required',
                'max:20',
                'min:4',
                'string',
                'unique:'. TCharacter::class .',name',
                'regex:~^[^!@#$%^&*()_+|}{":<>?`/.,;\'\[\]\\\\]+$~',
            ],
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);
        $point = User::where('user_id', '=', auth()->user()->user_id)->sum('point');
        $price = TChangePrices::where('change_type', 'Change Nickname')->sum('price');
        try {
            if ($point >= $price) {
                AHWebsiteLog::create([
                    'user_id' =>  auth()->user()->user_id,
                    'login_id' =>  auth()->user()->login_id,
                    'grade' =>  auth()->user()->grade,
                    'name_activity' => 'Change Nickname',
                    'description' => 'Change nickname from ['. $validatedData['nickname'] . '] to [' . $validatedData['newNickname'] . ']',
                    'date' => date('Y-m-d H:i:s')
                ]);
                User::where('user_id', auth()->user()->user_id)->decrement('point', $price);
                TCharacter::where('name', $validatedData['nickname'])->update([
                    'name'=> $validatedData['newNickname'],
                ]);
                return back()->with("success", "Nickname changed successfully!");
            }else{
                return back()->with("failed", "Your rps is not sufficient..");
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function changeGenderView() {
        return view('dashboard.character.changegender', [
            'characterName'=> TCharacter::select('name','ctype_id')->where('user_id', auth()->user()->user_id)->get('*'),
            'price' => TChangePrices::where('change_type', 'Change Gender')->sum('price')
        ]);
    }

    public function changeGenderUpdate(Request $request) {
        $validatedData = $request->validate([
            'character' => 'required|string',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        $genderConversion = [
            // WOMAN to MAN
            196869 => 196993, // Human
            196870 => 196994, // Guardian
            196871 => 196995, // Defender
            197133 => 197257, // Elf
            197134 => 197258, // Priest
            197135 => 197259, // Templar
            197653 => 197777, // Archer
            197654 => 197778, // Ranger
            197655 => 197779, // Scout
            198685 => 198809, // Assasin
            198686 => 198810, // Avenger
            198687 => 198811, // Predator
            200741 => 200865, // Warrior
            200742 => 200866, // Berseker
            200743 => 200867, // Savage
            204845 => 204969, // Mage
            204846 => 204970, // Warlock
            204847 => 204971, // Wizard
            229437 => 229561, // Dragon Fighter
            229438 => 229562, // Dragon Knight
            229439 => 229563, // Dragon Sage

            // MAN to WOMAN
            196993 => 196869, // Human
            196994 => 196870, // Guardian
            196995 => 196871, // Defender
            197257 => 197133, // Elf
            197258 => 197134, // Priest
            197259 => 197135, // Templar
            197777 => 197653, // Archer
            197778 => 197654, // Ranger
            197779 => 197655, // Scout
            198809 => 198685, // Assasin
            198810 => 198686, // Avenger
            198811 => 198687, // Predator
            200865 => 200741, // Warrior
            200866 => 200742, // Berseker
            200867 => 200743, // Savage
            204969 => 204845, // Mage
            204970 => 204846, // Warlock
            204971 => 204847, // Wizard
            229561 => 229437, // Dragon Fighter
            229562 => 229438, // Dragon Knight
            229563 => 229439, // Dragon Sage
        ];

        $point = User::where('user_id', '=', auth()->user()->user_id)->sum('point');
        $price = TChangePrices::where('change_type', 'Change Gender')->sum('price');

        $characterName = $validatedData['character'];
        $gender = TCharacter::where('name', $characterName)->sum('ctype_id');

        if ($point >= $price) {
            if (array_key_exists($gender, $genderConversion)) {
                AHWebsiteLog::create([
                    'user_id' =>  auth()->user()->user_id,
                    'login_id' =>  auth()->user()->login_id,
                    'grade' =>  auth()->user()->grade,
                    'name_activity' => 'Change Gender',
                    'date' => date('Y-m-d H:i:s')
                ]);
                User::where('user_id', auth()->user()->user_id)->decrement('point', $price);
                TCharacter::where('name', $characterName)->update([
                    'ctype_id' => $genderConversion[$gender],
                ]);

                return back()->with('success','Gender change successful!');
            } else {
                // Jika nilai gender input tidak valid, tampilkan pesan kesalahan
                return back()->with('failed', 'Invalid gender input');
            }
        }else {
            return back()->with("failed", "Your rps is not sufficient..");
        }


    }

}
