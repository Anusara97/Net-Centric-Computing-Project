<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempUser;
use Hash;
use Session;

class TempUserController extends Controller
{
    //
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
        $result = $TempUser->save();

        if($result) {
            return back()->with('success', 'User Regitration Successfull!');
        } else {
            return back()->with('fail', 'Somthing worng!, Please check your inputs.');
        }
    }
}
