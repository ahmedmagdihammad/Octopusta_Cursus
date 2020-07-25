<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Auth;
use URL;

class SigninControllers extends Controller
{
    public function index(){
        return view('frontend.signin');
    }

    public function login(Request $request)
    {
        $input = $request->all();
  
        $this->validate($request, [
            'mobile' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->mobile, FILTER_VALIDATE_EMAIL) ?: 'mobile';
        if(auth()->attempt(array($fieldType => $input['mobile'], 'password' => $input['password'])))
        {
            if(Auth::user()->type == "A"){
                Auth::logout();
                return back();
            }else {
                if(Auth::user()->status == "0")
                {
                    Auth::logout();
                    return back();
                } else {
                    return redirect('/home');
                }
            }
        }else{
            return back();
        }    
    }

    public function signup(Request $request) 
    {
        return view('frontend.signup');

    }

    public function create(Request $request) 
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        
        User::create([
            'name' => $request['name'],
            'mobile' => $request['mobile'],
            'email' => $request['email'],
            'type' => $request['type'],
            'password' => Hash::make($request['password']),
        ]);

        $input = $request->all();
        $this->validate($request, [
            'mobile' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->mobile, FILTER_VALIDATE_EMAIL) ?: 'mobile';
        if(auth()->attempt(array($fieldType => $input['mobile'], 'password' => $input['password'])))
        {
            return redirect('/home');
        }else{
            return back();
        }

        return redirect('/home');

    }
}
