<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Fave;

class UserController extends Controller
{
    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'userhandle' => ['required', 'alpha_num', Rule::unique('users', 'userhandle')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed'],
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in.');
    }

    public function login(){
        return view('user.login');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You have been logged in.');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out');
    }

    public function userpage(Request $request){ 
        $pathInfo = $request->getPathInfo();
        preg_match('#^/([a-zA-z-0-9]+)$#', $pathInfo, $matches);
        $userhandle = $matches[1];
        $owner = User::where('userhandle', $userhandle)->first();
        if($owner){
            $is_owner = auth()->user() == null or auth()->id() != $owner->id;
            if($is_owner)
                $faves = Fave::latest()->where('user_id', $owner->id)->where('is_public', true)->paginate(3);
            else
                $faves = Fave::latest()->where('user_id', $owner->id)->paginate(3);
            return view('user.userpage', ['user' => $owner, 'faves' => $faves]);
        }
        return redirect('/')->with('message', "User $userhandle not found.");
    }
}
