<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempUser;
use App\Models\User;
use Hash;
use Session;

class TempUserController extends Controller
{
    //save data of the registration
    function addTempUser(Request $req) {
        $req->validate([
            'name'=>'required',
            'email'=>'required|email|unique:temp_users',
            'designation'=>'required',
            'password'=>'required'
        ]);

        $TempUser = new TempUser;
        
        $TempUser->name = $req->name;
        $TempUser->email = $req->email;
        $TempUser->designation = $req->designation;
        $TempUser->staffId = $req->staffId ?: null;
        // Set department to null if the designation is Student, otherwise use the request input
        $TempUser->department = $req->designation === "Student" ? null : $req->department;
        $TempUser->studentId = $req->studentId ?: null;
        $TempUser->password = Hash::make($req->password);
        // Set the role
        $TempUser->role = $req->designation === "Student" ? "Student" : "Staff";
        $result = $TempUser->save();

        if($result) {
            return back()->with('success', 'User Regitration Successfull! Await for the credentials.');
        } else {
            return back()->with('fail', 'Somthing worng!, Please check your inputs.');
        }
    }

    // view temporary users
    function showTempUsers() {
        $data = TempUser::all();
        return view('tempUserList', ['users'=>$data]);
    }

    //remove unauthorized temporary users
    function Remove($id, Request $req) {
        $data = TempUser::find($id);
        $result = $data->delete();

        if($result) {
            return back()->with('success', 'User Rejected!');
        } else {
            return back()->with('fail', 'Somthing worng!, Please check your inputs.');
        }
    }

    //Authorizing the temporary users
    public function registerUser($id) {
        $data = TempUser::find($id);
    
        //Add temp user as new user 
        $user = new User();

        $user->name = $data->name;
        $user->email = $data->email;
        $user->designation = $data->designation;
        $user->staffId = $data->staffId;
        $user->department = $data->department;
        $user->studentId = $data->studentId;
        $user->role = $data->role;
        $user->password = $data->password;
        $result = $user->save();
    
        //delete temp user from temporary table
        $data = TempUser::find($id);
        $data->delete();
    
        //check if the result is successfull or not
        if($result) {
            return back()->with('success', 'User Regitration Successfull!');
        } else {
            return back()->with('fail', 'Somthing worng!, Please check your inputs.');
        }
    }
}
