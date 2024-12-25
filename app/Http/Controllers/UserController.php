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
}
