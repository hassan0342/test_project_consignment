<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    function register()
    {
      return view('user.register.index');
    }


    public function register_save(Request $request)
    {
    
        $user = new User();
        $validator =  Validator::make(['email'=>$request->email],[
            'email' => ['required', 'email', \Illuminate\Validation\Rule::unique('users')->ignore($user->id)]//
        ]);

        if ($validator->fails())
        {
            return back()->with('error', $validator->errors());
        }
      
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 1;
        $user->save();
        Auth::login($user);
        return redirect('user/consignment')->with('success', 'ThankYou  '.  $user->name.' ! You are successfully Register');

           
    }

     function login()
    {
        return view('user.login.index');
    }


    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password'),
            'role_id' => 1
        );

        if(Auth::attempt($user_data))
        {
            return redirect('user/consignment')->with('success', 'ThankYou ! You are successfully Login');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }

    }
        function logout()
        {
            Auth::logout();
            return redirect('user/login');
        }
    
   


    }
