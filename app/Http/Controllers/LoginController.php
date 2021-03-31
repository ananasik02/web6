<?php

namespace App\Http\Controllers;

use App\Models\Gamer;
use Illuminate\Http\Request;
use Illuminate\Session;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'username' => ['required', 'min:2', 'max:15'],
            'email' => 'required|email:rfc,dns',
            'password' => ['required', 'min:6', 'confirmed'],
            'password_confirmation' => 'required|min:6'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $gamer = new Gamer($validatedData);
        $gamer->save();
        return view('welcome')->with('successMessage', 'Hello,' .  $validatedData['username'] . '! You can play now!');
    }
}
