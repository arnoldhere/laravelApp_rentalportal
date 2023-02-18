<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\agent;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function dashboard()
    {
        if (session()->get('admin') == "admin@gmail.com") {
            return view('admin.dashboard');
        } else {
            return view('home.login');
        }
    }
    public function properties()
    {
        if (session()->get('admin') == "admin@gmail.com") {
            return view('admin.dashboard');
        } else {
            return view('admin.properties');
        }
    }
    public function team()
    {
        if (session()->get('admin') == "admin@gmail.com") {
            $agents = agent::all();
            return view('admin.team', compact('agents'));
        } else {
            return view('home.login');
        }
    }
    public function addAgent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|digits:10',
            'about' => 'required',
            'profilePhoto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        $profilePhoto = str_replace(' ', '_', $request->name) . '' . time() . '' . $request->profilePhoto->extension();
        $request->profilePhoto->move(public_path('admin/agents'), $profilePhoto);


        $agent = new agent();
        $agent->name = $request->name;
        $agent->email = $request->email;
        $agent->phone = $request->phone;
        $agent->about = $request->about;
        $agent->profilePhoto = $profilePhoto;
        $agent->save();

        if (isset($agent)) {
            Alert::success('Added', 'Agent Added successfully');
            return redirect()->route('admin.team');
        } else {
            Alert::warning('Failed', 'Failed to save ...! Try again');
            return redirect()->route('admin.team');
        }
    }
    public function deleteAgent($id)
    {
        agent::find($id)->delete();

        Alert::success('Delete', ' Agent Removed successfully');
        return redirect()->route('admin.team');
    }
    public function updateAgent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:agents',
            'phone' => 'required|digits:10',
            'about' => 'required',
            'profilePhoto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        $profilePhoto = str_replace(' ', '_', $request->name) . '' . time() . '' . $request->profilePhoto->extension();
        $request->profilePhoto->move(public_path('admin/agents'), $profilePhoto);


        // $agent = agent::find($request->id);
        $agent = agent::find($request->id);
        $agent->name = $request->name;
        $agent->email = $request->email;
        $agent->phone = $request->phone;
        $agent->about = $request->about;
        $agent->profilePhoto = $profilePhoto;
        $agent->save();

        if (isset($agent)) {
            Alert::success('Update', 'Agent Edited successfully');
            return redirect()->route('admin.team');
        } else {
            Alert::warning('Failed', 'Failed to edit ...! Try again');
            return redirect()->route('admin.team');
        }
    }
}
