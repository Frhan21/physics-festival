<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\CssSelector\Node\FunctionNode;

class RegisterController extends Controller
{


    public function index()
    {
        return view('register.index',[
            'title'=>'PF | Daftar Akun'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'username'=>'required|max:13',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('success','Registrasi Berhasil ! Silahkan Login');
    }
}
