<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\userModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailDemo;
use Symfony\Component\HttpFoundation\Response;
use App\Models\forgetPassword;

class homeController extends Controller
{
    // ===================== login authentication ===================== //
    public function login()
    {
        if (session()->get('admin')) {
            return redirect()->route('admin.dashboard');
        } else if (session()->get('user')) {
            return redirect()->route('user.index');
        } else {
            return view('home.login');
        }
    }
    public function loginuser(Request $request)
    {
        $role = $request->role;
        // login as admin
        if ($role == 'admin') {
            $emailValidate = 'admin@gmail.com';
            $pwdValidate = 'admin';
            if (($request->email == $emailValidate) && ($request->password == $pwdValidate)) {
                Alert::success('Login', "Welcome Admin !");
                $request->session()->put("admin", $request->email);  // stores the session 
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
            $email = $request->email;
            if ($check) {
                Alert::success("Login", "Welcome user !");
                $request->session()->put("user", $email);
                return redirect()->route('user.index');
            } else {
                Alert::error('Failed', "Unable to login ... Try again !");
                return redirect()->route('login');
            }
        }
    }



    //=====================  signup authentication ===================== //
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
            'password' => 'required|min:4|confirmed',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // avatar config
        $avatar = str_replace(' ', '_', $request->name) . '' . time() . '.' . $request->avatar->extension();
        $request->avatar->move(public_path('imgs/userAvatars'), $avatar);

        $user = new userModel();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->avatar = $avatar;
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

    // ===================== logout kill[session] ===================== //
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        $request->session()->flush();
        return redirect()->route('login');
    }
    // =====================  forgot password process ===================== //
    public function forgotPassword()
    {
        return view('home.forgotPassword');
    }

    public function setPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
        $chk = userModel::where('email', $request->email)->first();

        if ($chk) {
            $user =  userModel::find($request->email);
            $user->password = $request->password;
            $user->save();

            Alert::success("Password changed");
            return redirect()->route('login');
        } else {
            Alert::warning("Email not Found");
            return redirect()->back();
        }
    }




    // ================== mails
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
