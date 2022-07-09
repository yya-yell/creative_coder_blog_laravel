<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('Auth.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:8',
            'user_name' => ['required', Rule::unique('users' , 'user_name')],
            'email' => ['required',Rule::unique('users' , 'email')],
            'password' => 'required|min:8|max:16',
        ]);

        $user = User::create($data);
        auth()->login($user);
        return redirect('/')->with('success' , "Welcome $user->name");
    }

    public function login()
    {
        return view('Auth.login');
    }

    public function login_store()
    {
        $data = request()->validate([
            'email' => ['required', 'email' , Rule::exists('users' , 'email')],
            'password' => ['required' , 'min:8']
        ]);

        if(auth()->attempt($data)){
            return redirect('/')->with('success' , "Welcome");
        }else{
            return redirect()->back()->with('fail' , "Credential fail");
        }

    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success' , "You have been loggout");
    }
}
