<?php
namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function redirectGoogle()
{
    return Socialite::driver('google')->redirect();
}

public function callbackGoogle()
{
    $googleUser = Socialite::driver('google')->stateless()->user();

    $user = User::updateOrCreate([
        'email' => $googleUser->getEmail(),
    ], [
        'name' => $googleUser->getName(),
        'password' => bcrypt('google_login'),
    ]);

    Auth::login($user);

    return redirect('/');
}
}
