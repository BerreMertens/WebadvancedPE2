<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function index(){
        if(cookie::get('token3')){
            $cookie=Cookie::forever('token3',\Illuminate\Support\Str::random(10));
        }else{
            $cookie=Cookie::forever('token3',cookie::get('token3'));
        }

        return response()->view('home')->withCookie($cookie);
    }
    public function showLogin(){
        return View('Login');
    }
    public function doLogin(){
        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

// run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('Login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                return View('home');

            } else {

                // validation not successful, send back to form
                return Redirect::to('Login');


            }

        }

    }
    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('home'); // redirect the user to the login screen
    }
}
