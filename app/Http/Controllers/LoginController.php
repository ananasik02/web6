<?php

namespace App\Http\Controllers;

use App\Models\Gamer;
use Illuminate\Http\Request;
use Illuminate\Session;

class LoginController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'first_name' => ['required', 'min:2', 'max:15'],
            'last_name' => ['required', 'min:2', 'max:15'],
            'email' => 'required|email:rfc,dns'
        ]);
        $gamer = new Gamer($validatedData);
        $gamer->save();
        return view('welcome')->with('successMessage', 'You can play now!');
    }
}
