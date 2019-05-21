<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\User;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // return view('home');
       
        return view('home');
    }

    public function user_login(Request $request)
    {

      if(Auth::attempt(['email' => request('email'), 'password' => request('password')]))
      {
        $user = Auth::user(); 
        session(['user' => $user->name,'user_data'=>$user]);
      }
   
      return view('user.index');

    }

    public function user_logout()
    {
        session()->forget('user');
        return view('user.index');
    }

    public function user_register(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required',  
        ]);
    if ($validator->fails()) { 
         return view('user.index');           
        }
        else
        {
            $input = $request->all(); 
            // $input['password'] = bcrypt($input['password']);
             $user = User::create($input); 
             if($user)
             {
                session(['user' => $user->name]);
             }
             return view('user.index');
             
        }
       
        
    }
}
