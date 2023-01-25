<?php

namespace App\Http\Controllers;

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
    public function property_grid()
    {
        return view('user.property-grid');
    }
    public function property_single()
    {
        return view('user.property-single');
    }
}
