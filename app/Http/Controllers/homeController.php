<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\userModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailDemo;
use Symfony\Component\HttpFoundation\Response;
use App\Models\forgetPassword;

class homeController extends Controller
{
    // login authentication
    public function login()
    {
        return view('home.login');
    }
    public function loginuser(Request $request)
    {
        $role = $request->role;
        // login as admin
        if ($role == 'admin') {
            $emailValidate = 'admin@gmail.com';
            $pwdValidate = 'admin';
            if ($emailValidate == $request->email && $pwdValidate == $request->password) {
                Alert::success('Login', "Welcome Admin !");
                return redirect()->route('admin.dashboard');
            } else {
                Alert::error('Failed', "Unable to login ... Try again !");
                return redirect()->route('login');
            }
        } else if ($role == 'user') {
            // login as users
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);
            $check = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            if ($check) {
                Alert::success("Login", "Welcome user !");
                return redirect()->route('user.index');
            } else {
                Alert::error('Failed', "Unable to login ... Try again !");
                return redirect()->back();
            }
        }
    }



    // signup authentication
    public function signup()
    {
        return view('home.signup');
    }
    public function signupUser(Request $request)
    {
        $request->validate([
            'firstname' => "required|min:4",
            'lastname' => "required|min:4",
            'phone' => 'required|digits:10',
            'email' => "required|unique:users",
            'password' => 'required|min:4|confirmed'
        ]);

        $user = new userModel();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->type = 1;
        $user->save();

        if (isset($user)) {
            Alert::success('Done ', 'Successfully Sign Up');
            return redirect()->route('login');
        } else {
            Alert::error("Failed", "Unable to signup ... Try again ! ");
            return redirect()->route('login');
        }
    }

    public function logout()
    {

        return redirect()->route('login');
    }



    // forgot password process
    public function forgotPassword()
    {
        return view('home.forgotPassword');
    }

    public function askOTP()
    {
        return view('home.askOtp');
    }

    public function matchOTP(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'otp' => 'required|numeric|digits:4'
        ]);
        $fg = forgetPassword::find($request->id);
        if ($fg->otp == $request->otp) {
        }
        return $request;
    }

    public function setPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
    }
    public function sendEmail()
    {
        $email = 'official.arnold.mac.2004@gmail.com';

        $mailData = [
            'title' => 'Demo Email',
            'url' => 'https://www.positronx.io'
        ];

        Mail::to($email)->send(new EmailDemo($mailData));

        return response()->json([
            'message' => 'Email has been sent.'
        ], Response::HTTP_OK);
    }
}
