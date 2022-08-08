<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('home', [
            'title' => "Home Page",
        ]);
    }
    public function login()
    {
        return view('login', [
            'title' => "Login Page",
        ]);
    }
    public function register()
    {
        return view('register', [
            'title' => "Register Page",
        ]);
    }
    public function postLogin(LoginRequest $request)
    {
        // dd($request->input());
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => "1"])) {

            return redirect()->route('index');
        }
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => "0"])) {

            return redirect()->route('admins.index');
        } else {
            Session::flash('error', 'Email or Password is incorrect');
            return redirect()->back();
        }
    }
    public function store(RegisterRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 1;
        $user->save();
        return redirect()->route('index');
    }
}
