<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class Authentication extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('pages.auth.app');
    }
    
    public function login(Request $request)
    {
        
        $validate=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if($validate){
            $credentials=$request->only('email','password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            }
        }
        return back()->with('error','Email atau Password salah');

    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function save(Request $request)
    {
        $validate=$request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'password_confirmation'=>'required|same:password'
        ]);

        if($validate){
            $user=new User;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=bcrypt($request->password);
            $user->save();
            return redirect('/')->with('success','Berhasil mendaftar');
        }

        return back()->with('error','Gagal mendaftar');
    
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
