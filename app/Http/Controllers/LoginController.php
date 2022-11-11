<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index',[
            'title'=>'PF | Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        if (Auth::attempt($credentials)){
            if($credentials['email'] ==='physicsfestivalunand@gmail.com'){
                $request->session()->regenerate();
                return redirect()->intended('/admins');
            }

            $request->session()->regenerate();
            return redirect('/home');
        }

        return back()->with('loginError', 'Login Gagal, Silahkan Masukkan lagi !!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home');
    }
}
