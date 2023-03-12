<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\agent;
use App\Models\cityModel;
use App\Models\feedbackMSg;
use App\Models\propertyModel;
use App\Models\userModel;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{

    public function dashboard()
    {
        if (session()->get('admin') == "admin@gmail.com") {
            Paginator::useBootstrap();
            $agents = agent::all();
            $feedbacks = feedbackMSg::all();
            // $users = userModel::all();
            $users = DB::table('users')->paginate(5);
            return view('admin.dashboard', compact('agents'), compact('users'), ['users' => $users]);
        } else {
            return view('home.login');
        }
    }

    public function deleteUser($id)
    {
        userModel::find($id)->delete();
        Alert::success("Successfully Deleted");
        return redirect()->route('admin.dashboard');
    }
    //==============================   Agent operations
    public function agent()
    {
        Paginator::useBootstrap();
        if (session()->get('admin') == "admin@gmail.com") {
            $agents = agent::all();
            $pagAgents = DB::table('agents')->paginate('5');
            return view('admin.team', compact('agents'), ['pagAgents' => $pagAgents]);
        } else {
            return view('home.login');
        }
    }
    public function editAgentPage($id)
    {
        $agent = agent::find($id);
        return view('admin.editAgent', compact('agent'));
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
            'email' => 'required',
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

    //==============================   Properties operations
    public function properties()
    {
        Paginator::useBootstrap();
        $cities =  cityModel::all();
        $properties = propertyModel::all();
        $pagProperty = DB::table('property')->paginate('5');
        if (session()->get('admin') == "admin@gmail.com") {
            return view('admin.properties', compact('cities'), compact('properties'),['pagProperty'=>$pagProperty]);
        } else {
            return view('home.login');
        }
    }
    public function deleteProperty($id)
    {
        propertyModel::find($id)->delete();
        Alert::success('Delete', ' Property Removed successfully');
        return redirect()->route('admin.listproperty');
    }
    public function addProperty(Request $request)
    {

        $request->validate([
            'type' => 'required',
            'status' => 'required',
            'area' => 'required',
            'currentPrice' => 'required',
            'location' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = str_replace(' ', '_', $request->name) . '' . time() . '' . $request->image->extension();
        $request->image->move(public_path('imgs/propertyImgs'), $image);

        $property = new propertyModel();
        $property->type = $request->type;
        $property->status = $request->status;
        $property->area = $request->area;
        $property->currentPrice = $request->currentPrice;
        $property->location = $request->location;
        $property->description = $request->description;
        $property->image = $image;
        $property->save();

        if ($property->save()) {
            Alert::success("Done", "Property listed");
            return redirect()->route('admin.listproperty');
        } else {
            Alert::error("Failed", "Try again ");
            return redirect()->route('admin.listproperty');
        }
    }
    //========================== reviews 
    public function reviews()
    {
        Paginator::useBootstrap();
        $feedbacks = feedbackMSg::all();
        $feedbacks = DB::table('feedbacks')->paginate(5);
        return view('admin.reviews', compact('feedbacks'), ['feedbacks' => $feedbacks]);
    }
    public function deleteReview($id)
    {
        feedbackMSg::find($id)->delete();
        Alert::success("Deleted");
        return redirect()->route('admin.reviews');
    }
}
