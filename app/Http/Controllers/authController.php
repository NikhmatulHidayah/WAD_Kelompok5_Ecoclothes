<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class authController extends Controller
{
    public function getLogin(){
        return view("auth.login");
    }
    public function postLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
    
        $user = DB::table('users')->where('email', $email)->first();
    
        if (!$user || !Hash::check($password, $user->password)) {
            return back()->withErrors([
                'email' => 'The provided credentials are incorrect.',
            ]);
        }
    
        Auth::loginUsingId($user->id_user);
    
        if ($user->is_merchant) {
            return redirect('/admin/merchant/order/all');
        } else {
            return redirect('/');
        }
    }
    

    public function getRegister(){
        return view("auth.register");
    }
    public function postRegister(Request $request)
    {
    $name = $request->input('name');
    $eco_id = $request->input('eco_id');
    $phone_number = $request->input('phone_number');
    $email = $request->input('email');
    $password = $request->input('password');

    DB::table('users')->insert([
        'id_user' => Str::uuid(),
        'name' => $name,
        'eco_id' => $eco_id,
        'phone_number' => $phone_number,
        'email' => $email,
        'is_merchant' => 0,
        'coin_eco' => 0,
        'password' => bcrypt($password), 
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

}
