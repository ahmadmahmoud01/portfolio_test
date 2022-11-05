<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $user = User::find(1);
        $skills = Skill::all();
        $experiences = Experience::all();
        $socials = Social::all();


        return view('layout', compact('skills', 'experiences', 'socials', 'user'));
    }

    public function register() {
        return view('users.register');
    }

    public function doRegister(Request $request) {
        $data = $request->validate([
            'username' => 'required|string|min:3',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect ('/login');

    }

    public function login() {
        return view('users.login');
    }

    public function doLogin(Request $request) {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // $data['password'] = bcrypt($data['password']);

        if(Auth::attempt($request->only(['email','password']))){
            return redirect("/home");
        }

        return redirect("login");


    }

    public function logout() {
        Auth::logout();

        return redirect('/home');
    }
}
