<?php

namespace App\Http\Controllers\Auth\ThirdParty\Google;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(): RedirectResponse
    {
        try {
            $socialUser = Socialite::driver('google')->user();

            $existingGoogleUser = User::where('google_id', $socialUser->id)->first();

            if ($existingGoogleUser) {
                Auth::login($existingGoogleUser);
            } else {
                $existingEmailUser = User::where('email', $socialUser->email)->first();

                if ($existingEmailUser) {
                    $existingEmailUser->google_id = $socialUser->id;
                    $existingEmailUser->save();

                    Auth::login($existingEmailUser);
                } else {
                    $username = $socialUser->nickname ?: strtolower(str_replace(' ', '', $socialUser->name)) . rand(100, 999);

                    $newUser = User::create([
                        'username' => $username,
                        'name' => $socialUser->name,
                        'email' => $socialUser->email,
                        'google_id' => $socialUser->id,
                        'password' => Hash::make(Str::random(16)),
                    ]);

                    event(new Registered($newUser));

                    $newUser->assignRole('mahasiswa');

                    Auth::login($newUser);
                }
            }

            return redirect('dashboard');
        } catch (Exception $e) {
            Log::error('Google Login Error', ['message' => $e->getMessage()]);

            return redirect()->route('login')->with([
                'error' => 'Login with Google failed. Please refresh and try again.',
            ]);
        }
    }
}