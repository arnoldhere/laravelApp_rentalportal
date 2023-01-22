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
}
