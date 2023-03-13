<?php

namespace App\Http\Controllers;

use App\Models\agent;
use App\Models\feedbackMSg;
use App\Models\propertyModel;
use App\Models\userModel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(Request $request)
    {
        if (session()->get("user")) {
            $agents = agent::all();
            $properti = propertyModel::all();
            return view('user.index', compact('agents'), compact('properti'));
        } else {
            $agents = agent::all();
            $feedbacks = feedbackMSg::all();
            return view("home.login", compact('agents'), compact('feedbacks'));
        }
    }
    public function about()
    {

        $feedbacks = feedbackMSg::all();
        if (session()->get('user')) {
            return view('user.about', compact('feedbacks'));
        } else {
            return view('home.login');
        }
    }
    public function agents_grid()
    {
        $agents = agent::all();
        if (session()->get('user')) {
            return view('user.agents-grid', compact('agents'));
        } else {
            return view('home.login');
        }
    }
    public function blog_grid()
    {
        if (session()->get('user')) {
            return view('user.blog-grid');
        } else {
            return view('home.login');
        }
    }
    public function blog_single()
    {
        if (session()->get('user')) {
            return view('user.blog-single');
        } else {
            return view('home.login');
        }
    }

    public function contact()
    {
        if (session()->get('user')) {
            return view('user.contact');
        } else {
            return view('home.login');
        }
    }
    public function storeFeedback(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required|min:25'
        ]);

        $feedbacktbl = new feedbackMSg();
        $feedbacktbl->name = $request->name;
        $feedbacktbl->email = $request->email;
        $feedbacktbl->subject = $request->subject;
        $feedbacktbl->message = $request->message;
        $feedbacktbl->save();

        if (isset($feedbacktbl)) {
            Alert::success('Sent', 'Message has been stored , response will given to you soon !');
            return redirect()->route('user.contact');
        } else {
            Alert::error('Failed', 'Failed to send ! try again...');
            return redirect()->route('user.contact');
        }
    }

    public function property_grid()
    {
        if (session()->get('user')) {
            $property = propertyModel::all();
            return view('user.property-grid',compact('property'));
        } else {
            return view('home.login');
        }
    }
    public function property_single()
    {
        if (session()->get('user')) {
            return view('user.property-single');
        } else {
            return view('home.login');
        }
    }
    public function showProfile()
    {
        return view("user.profile");
    }
    public function editProfilePage($id)
    {
        $user = userModel::find($id);
        return view('user.editProfile', compact('user'));
    }
    public function updateProfile(Request $request)
    {
        try {
            $request->validate([
                'firstname' => "required|min:4",
                'lastname' => "required|min:4",
                'phone' => 'required|digits:10',
                'email' => "required",
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            // avatar config
            $avatar = str_replace(' ', '_', $request->name) . '' . time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('/imgs/userAvatars'), $avatar);

            $user =  userModel::find($request->id);
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->avatar = $avatar;
            $user->save();

            if ($user->save()) {
                Alert::success("Done", "Profile updated");
                return redirect()->route('user.profile');
            } else {
                Alert::error("Failed", "Profile can't update");
                return redirect()->route('user.profile');
            }
        } catch (\Throwable $th) {
            throw $th;
            echo $th;
        }
    }
}
