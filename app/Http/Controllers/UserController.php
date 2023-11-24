<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function registers(Request $request) {
        $incomingFields = $request->validate([
           'name' => ['required','string','min:5','max:10'],
           'username' => ['required','min:5','max:20',Rule::unique('users','username')],
           'email'=> ['required','email',Rule::unique('users','email')],
           'password'=> ['required','confirmed','min:5','max:50'],
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        if(!$user) {
            return redirect()->back()->with('error','Registration Failed, Please Try Again');
        }
        return redirect()->route('login')->with('success','Registration success, Login to Continue !');
    }

    //Login Data 
    public function logins(Request $request) {
        $incomingFields = $request->validate([
            'username' => 'required',
            'password'=> 'required',
         ]);

         if(auth()->attempt(['username' => $incomingFields['username'], 'password' => $incomingFields['password']])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
         }
         return redirect()->intended('login');
    }

}
