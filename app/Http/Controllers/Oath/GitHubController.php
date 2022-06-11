<?php

namespace App\Http\Controllers\Oath;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GitHubController extends Controller
{
    public function redirect() {
        return Socialite::driver('github')->redirect();
    }

    public function callback() {
        $gitUser = Socialite::driver('github')->user();

        $usuario = User::where('external_provider', 'github')
            ->where('external_id', $gitUser->getId())->first();

        if($usuario) {
            $usuario->update([
                'github_token'=>$gitUser->token,
                'github_refresh_token'=>$gitUser->refreshToken
            ]);
        } else {
            $usuario=User::create([
                'external_provider'=>'github',
                'external_id'=>$gitUser->getId(),
                'name'=>$gitUser->getName(),
                'email'=>$gitUser->getEmail(),
                'password'=>bcrypt('password'),
                'email_verified_at'=>now(), 
                'github_token'=>$gitUser->token,
                'github_refresh_token'=>$gitUser->refreshToken
            ]);
        }

        Auth::login($usuario);
        return redirect('dashboard');
    }
}
