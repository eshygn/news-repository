<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRegistration;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    //

    public function store(UserRegistration $request){
         /* before storing the submitted form data, the form must go through validatino check and then store user into the database and then sign in the user and re-direct user */

            // dd($request->all()); // won't run if validation fails. Outputs the result. (Die-dump())


        User::create([
            'firstname'=>$request->firstname, // $request takes plain text value to store in database. Not ideal for password
            'lastname'=>$request->lastname,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        return redirect()->route('login');

        // auth()->user(); // to grab currently authenticated user -> returns user model and if not returns null. Helpful if you eg. wanna return user's name

        auth()-> attempt($request->only('email','password'));

    }

    // public function store(Request $request) {

    }


