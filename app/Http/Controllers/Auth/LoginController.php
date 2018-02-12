<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function displayLoginForm(){
        return view('auth.login');
    }
    public function postLogin(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(!Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])){
            return redirect()->back()->with('danger', 'Invalid username or password!');

        }

        return redirect('myCourses');

    }
}
