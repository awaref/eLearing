<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller{

    public function index(){
        return view('auth.register');
    }
    
    
    public function createUser(Request $request){
        
        $this->validate($request, [
            'username'   => 'required|string|max:255|unique:users',
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|string|email|max:150|unique:users',
            'password'   => 'required|string|max:255|min:6',
            'gender'     => 'required',
            'role'       => 'required',
            'education'  => 'required_if:role,Instructor',
            'department' => 'required',
            'level'      => 'required_if:role,Student|integer|min:0|max:4',
            'gpa'        => 'required_if:role,Student|numeric',
        ]);

        if($request->input('gender') == 'Male'){
            $imagePath = asset('public/profile_pictures/avatar5.png');
        }else{
            $imagePath = asset('public/profile_pictures/avatar2.png');
        }
        
        $user = User::create([
                    'username'         => $request->input('username'),
                    'first_name'       => $request->input('first_name'),
                    'last_name'        => $request->input('last_name'),
                    'email'            => $request->input('email'),
                    'password'         => $request->input('password'),
                    'level'            => $request->input('level'),
                    'GPA'              => $request->input('gpa'),
                    'education'        => $request->input('education'),
                    'department'       => $request->input('department'),
                    'location'         => $request->input('location'),
                    'gender'           => $request->input('gender'),
                    'role'             => $request->input('role'),
                    'profilePicture'   => $imagePath,
        ]);
        if($user){
            return redirect()->back()->with('success', 'The user have been created successfully!');
        }else{
            return redirect()->back();
        }

    }

}

