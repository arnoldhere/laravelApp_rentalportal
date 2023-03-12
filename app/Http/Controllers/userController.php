<?php

namespace App\Http\Controllers;

use App\Models\agent;
use App\Models\feedbackMSg;
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
            $feedbacks = feedbackMSg::all();
            return view('user.index', compact('agents'), compact('feedbacks'));
        } else  if (session()->get('admin')) {
            $agents = agent::all();
            $feedbacks = feedbackMSg::all();
            return view('admin.dashboard', compact('agents'), compact('feedbacks'));
        } else {
            $agents = agent::all();
            $feedbacks = feedbackMSg::all();
            return view("home.login", compact('agents'), compact('feedbacks'));
        }
    }

    public function about()
    {
        if (session()->get('user')) {
            return view('user.about');
        } else {
            return view('home.login');
        }
    }
    public function agent_single()
    {
        if (session()->get('user')) {
            return view('user.agent-single');
        } else {
            return view('home.login');
        }
    }
    public function agents_grid()
    {
        if (session()->get('user')) {
            return view('user.agents-grid');
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
            return view('user.property-grid');
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
}
