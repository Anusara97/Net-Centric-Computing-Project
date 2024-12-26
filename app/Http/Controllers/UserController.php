<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class UserController extends Controller
{
    // view users
    function showUsers() {
        $data = User::all();
        return view('UserList', ['users'=>$data]);
    }

    //
    function editUser($id) {
        //dd($id);
        $data = User::find($id);
        return view('editUser', compact('data'));
    }

    //remove Users
    function Remove($id, Request $req) {
        $data = User::find($id);
        $result = $data->delete();

        if($result) {
            return back()->with('success', 'User Removed Successfull!');
        } else {
            return back()->with('fail', 'Somthing worng!, Please check your inputs.');
        }
    }

    //update the edited content
    function updateUser(Request $req) {
        $User = User::find($req->id);
        
        $User->name = $req->name;
        $User->email = $req->email;
        $User->designation = $req->designation;
        $User->staffId = $req->staffId ?: null;
        // Set department to null if the designation is Student, otherwise use the request input
        $User->department = $req->designation === "Student" ? null : $req->department;
        $User->studentId = $req->studentId ?: null;
        $User->password = Hash::make($req->password);
        // Set the role
        $User->role = $req->designation === "Student" ? "Student" : "Staff";
        $result = $User->save();

        if($result) {
            return redirect('userList')->with('success', 'Successfully updated the user details!');
        } else {
            return back()->with('fail', 'Somthing worng!, Please check again.');
        }
    }

    function loginUser(Request $req) {
        $req->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $user = User::where('email', '=', $req->username)->first();

        if ($user) {
            if(Hash::check($req->password, $user->password)) {
                $req -> Session()->put('loginId', $user->id);
                return redirect('/dashboard');
            }else {
                return back()->with('fail', 'Accessed Denied! Please, check your credentials.');
            }
        } else {
            return back()->with('fail', 'Accessed Denied! Please, Register first!');
        }
    }

    
    function dashboards()
    {
        if (Session::has('loginId')) {
            // Retrieve the logged-in user's data
            $user = User::where('id', Session::get('loginId'))->first();
            $role = $user->role;

            // Check the user's role and redirect accordingly
            $data = $user; // Pass the logged-in user's data directly
            if ($role === 'Admin') {
                return view('dashboards.adminDashboard', compact('data'));
            } elseif ($role === 'Staff') {
                return view('dashboards.staffDashboard', compact('data'));
            } elseif ($role === 'Student') {
                return view('dashboards.studentDashboard', compact('data'));
            } else {
                return redirect('/login')->with('fail', 'Invalid role!');
            }
        } else {
            return redirect('/login')->with('fail', 'Accessed Denied! You have to loggin first!');
        }
    }

    function logout() {
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/login');
        }
    }
}