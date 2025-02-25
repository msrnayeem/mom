<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    /**
     * Redirect the user to the OAuth Provider.
     *
     * @param  string  $provider  ('google' or 'facebook')
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToProvider($provider)
    {
        // Validate provider if necessary
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.
     *
     * @param  string  $provider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleProviderCallback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Authentication failed, please try again.');
        }

        $socialId = $socialUser->getId();
        $email = $socialUser->getEmail();

        // If email is not provided, generate a dummy email (use with caution)
        if (! $email) {
            $email = $provider.'_'.$socialId.'@example.com';
        }

        // Check if a user exists either by social_id or email
        $user = User::where('social_id', $socialId)
            ->orWhere('email', $email)
            ->first();

        if (! $user) {
            $user = User::create([
                'name' => $socialUser->getName() ?? $socialUser->getNickname(),
                'email' => $email,
                'social_id' => $socialId,
                'provider' => $provider,
                // Create a random password since social logins don't use it
                'password' => bcrypt(Str::random(16)),
                'role' => 'student',
                'email_verified_at' => now(),
            ]);
        } else {
            // Optionally, update social_id and provider if they aren't set
            if (! $user->social_id) {
                $user->update([
                    'social_id' => $socialId,
                    'provider' => $provider,
                ]);
            }
        }

        Auth::login($user, true);

        return redirect()->intended('/dashboard');
    }
}
