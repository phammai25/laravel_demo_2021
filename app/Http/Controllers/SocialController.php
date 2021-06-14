<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\Models\User;
use App\Models\UserMeta;
class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->stateless()->user();
        $user = $this->createUser($getInfo,$provider);
        auth()->login($user);
        return redirect()->to('/admin');
    }
    function createUser($getInfo,$provider){
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = User::create([
                'first_name'     => $getInfo->name,
                'email'    => $getInfo->email ? $getInfo->email : 'demologinFB@gmail.com' ,
                'password' => '123456Aa@',
                'provider_id' => $getInfo->id
            ]);
            if($user){
                $insert_user_meta = UserMeta::create([
                   'user_id' => $user->id,
                   'sso_id' => $getInfo->token,
                   'avatar' => $getInfo->avatar
                ]);
            }
        }
        return $user;
    }
}
