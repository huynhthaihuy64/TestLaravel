<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotRequest;
use Illuminate\Support\Str;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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
        User::create($request->all(), with($request->role == 1));
        return redirect()->route('index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function forgot()
    {
        return view('forgot_password', [
            'title' => "Forgot Password",
        ]);
    }

    public function postForgot(ForgotRequest $request)
    {

        $token = Str::random(64);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        Mail::send('verify', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });
        Session::flash('success', 'We have e-mailed your password reset link!');
        return redirect()->back();
    }

    public function getPassword($token)
    {
        return view('reset_password', [
            'title' => 'Reset Password',
            'token' => $token
        ]);
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {

        $updatePassword = DB::table('password_resets')
            ->where(['email' => $request->email, 'token' => $request->token])
            ->first();

        if (!$updatePassword) {
            Session::flash('error', 'Update failed!');
            return redirect()->back();
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        Session::flash('success', 'Your password has been changed!');
        return redirect()->route('login');
    }
}
