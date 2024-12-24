<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempUser;
use Hash;
use Session;

class TempUserController extends Controller
{
    //save data of the registration
    function addTempUser(Request $req) {
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
            return back()->with('success', 'User Regitration Successfull!');
        } else {
            return back()->with('fail', 'Somthing worng!, Please check your inputs.');
        }
    }

    // view temp users
    function showTempUsers() {
        $data = TempUser::all();
        return view('tempUserList', ['users'=>$data]);
    }

    function Remove($id, Request $req) {
        $data = TempUser::find($id);
        $result = $data->delete();

        if($result) {
            return back()->with('success', 'User Rejected!');
        } else {
            return back()->with('fail', 'Somthing worng!, Please check your inputs.');
        }
    }
}
