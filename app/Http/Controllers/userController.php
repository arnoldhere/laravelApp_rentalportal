<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->regenerate();
        return view('user.index');
    }
}
