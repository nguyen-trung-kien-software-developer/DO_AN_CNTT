<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $this->registerOrLoginCustomer($user);

        return redirect()->intended(route('site.home'));
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->stateless()->user();

        $this->registerOrLoginCustomer($user);

        return redirect()->intended(route('site.home'));
    }

    protected function registerOrLoginCustomer($data)
    {
        // $customer = Customer::where('email', $data->email)->first();
        $customer = Customer::where('provider_id', $data->id)->first();
        if (!$customer) {
            $customer = new Customer;
            $customer->name = $data->name;
            $customer->email = $data->email;
            $customer->provider_id = $data->id;
            $customer->is_active = 1;
            $customer->save();
        }

        Auth::guard('customer')->loginUsingId($customer->id, true);
    }
}