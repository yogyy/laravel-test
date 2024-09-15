<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $req)
    {
        $valAttr = $req->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8), 'confirmed'] // password_confirmation
        ]);

        $newUser = User::create($valAttr);

        Auth::login($newUser);
        return redirect('/jobs');
    }
}
