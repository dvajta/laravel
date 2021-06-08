<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterCarrierController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register-carrier');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'driver_license' => 'required|string|max:255',
            'insurance' => 'required|string|max:255',
            'reg_certificate' => 'required|string|max:255',
            //'birthday' => 'required|date',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);

        //$user = User::create([
        //    'name' => $request->name,
        //    'email' => $request->email,
        //    'password' => Hash::make($request->password),
        //]);

        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->middle_name = $request->middle_name;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->driver_license = $request->driver_license;
        $user->insurance = $request->insurance;
        $user->reg_certificate = $request->reg_certificate;
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        //$user->attachRole($request->role_id);
        $user->attachRole('carrier');

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
