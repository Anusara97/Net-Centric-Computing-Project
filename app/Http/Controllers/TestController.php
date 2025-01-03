<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function getData(Request $req) {
        //dd($req);
        $req->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        return $req->input();
    }

    function login(Request $req) {
        $req->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        // $data = $req->input();
        // $req->session()->put('user', $data['username']);
        // return redirect('dashboard');
    }

    function register(Request $req) {
        return $req->input();
    }
}
