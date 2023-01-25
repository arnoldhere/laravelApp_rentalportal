<?php

namespace App\Http\Controllers;

use App\Models\feedbackMSg;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(Request $request)
    {
        return view('user.index');
    }
    public function about()
    {
        return view('user.about');
    }
    public function agent_single()
    {
        return view('user.agent-single');
    }
    public function agents_grid()
    {
        return view('user.agents-grid');
    }
    public function blog_grid()
    {
        return view('user.blog-grid');
    }
    public function blog_single()
    {
        return view('user.blog-single');
    }

    public function contact()
    {
        return view('user.contact');
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
            return redirect()->back();
        } else {
            Alert::error('Failed', 'Failed to send ! try again...');
            return redirect()->route('user.contact');
        }
    }

    public function property_grid()
    {
        return view('user.property-grid');
    }
    public function property_single()
    {
        return view('user.property-single');
    }
}
